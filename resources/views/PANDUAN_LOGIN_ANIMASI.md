# PANDUAN LENGKAP: SISTEM LOGIN, LIVEWIRE, & ANIMASI KUSTOM
*Dokumen ini disimpan di folder views sebagai referensi belajar Anda.*

---

## BAB 1: Evolusi Sistem Login (Tradisional vs Modern)

### 1. Sistem Login Tradisional (Cara Lama)
Pada awalnya, aplikasi web bekerja dengan siklus sinkronus (tersinkronisasi secara kaku).
- **Alur Kerja**: User mengisi form HTML standar (`<form action="/login" method="POST">`). Saat menekan tombol submit, browser akan membekukan layar, me-refresh seluruh halaman (muncul layar putih/blank), mengirim data ke server PHP (Controller), mencocokkannya dengan database, dan memaksa browser untuk langsung pindah ke halaman `/dashboard`.
- **Kelemahan Utama**: Terjadinya **"Flicker"** (layar berkedip putih saat pindah halaman). Dalam sistem ini, **mustahil** untuk menampilkan animasi transisi (seperti logo menggelinding) setelah menekan tombol login, karena browser sibuk membuang halaman lama dan memuat halaman baru.

### 2. Kenapa Kita Butuh AJAX / Livewire?
Untuk membuat animasi berjalan mulus tanpa layar berkedip, form tidak boleh me-refresh halaman. Kita harus mengirim data secara "gaib" di belakang layar menggunakan AJAX (Asynchronous JavaScript and XML).
- **Masalah AJAX Manual**: Menulis AJAX menggunakan `fetch()` atau `axios` di JavaScript sangat melelahkan. Anda harus mengurus event listener, membaca data dari DOM, mengirim JSON, dan mengurai balikan server secara manual.
- **Solusi Livewire**: Laravel Livewire mengambil alih semua kerepotan AJAX. Anda hanya menulis kode PHP, dan Livewire yang akan mengurus pertukaran data JavaScript di belakang layar secara otomatis.

---

## BAB 2: Merombak Form Menjadi Livewire

Untuk mengimplementasikan Livewire, kita mengubah total arsitektur login Anda.

### Langkah 1: Membuat Komponen Livewire
Kita menjalankan perintah:
```bash
php artisan make:livewire Auth\Login
```
Perintah ini menghasilkan dua file ajaib:
1. **Class Backend**: `app/Livewire/Auth/Login.php` (Pengganti Controller)
2. **View Frontend**: `resources/views/livewire/auth/login.blade.php` (Pengganti view lama)

### Langkah 2: Mengikat Data (Data Binding)
Di dalam view Livewire, kita membuang atribut `name="email"` tradisional dan menggantinya dengan `wire:model="email"`.
```html
<!-- Form Lama -->
<input type="text" name="email">

<!-- Form Livewire -->
<input type="text" wire:model="email">
```
`wire:model` menciptakan **Two-Way Data Binding**. Apapun yang diketik user di kotak input ini akan secara otomatis (real-time) tersinkronisasi dengan variabel public `$email` yang ada di dalam class PHP `Livewire/Auth/Login.php`.

### Langkah 3: Mencegah Refresh Layar
Pada tag form, kita menggunakan:
```html
<form wire:submit.prevent="login">
```
- `wire:submit`: Menandakan bahwa saat disubmit, jalankan function `login()` di PHP.
- `.prevent`: Ini adalah keajaiban utama. Menggantikan `e.preventDefault()` di JavaScript. Ini melarang keras browser melakukan *refresh* halaman.

---

## BAB 3: Trik Menunda Pindah Halaman

Bagian paling krusial dari pembuatan animasi ini ada di tahap paska-validasi. 
Jika di controller biasa, setelah password benar kita menulis:
```php
return redirect('/karyawan'); // ❌ Ini akan menghancurkan animasi karena langsung pindah halaman!
```

**Solusi Event Dispatcher:**
Di dalam file `Livewire/Auth/Login.php`, kita menggunakan fitur *Event Dispatching* (Penyiar Pesan).
```php
// Jika login berhasil, jangan redirect! Tapi teriakkan event ke browser.
$this->dispatch('login-success', url: $redirectUrl);
```
Sistem PHP sekarang hanya memberi tahu browser: *"Hei JavaScript, orang ini sukses login! Tolong urus sisanya, dan ini URL tujuan dia: `/karyawan`"*.

---

## BAB 4: JavaScript dan CSS Beraksi

Setelah PHP selesai dan menyerahkan tugas ke browser, JavaScript dan CSS mengambil alih panggung untuk memutar animasi.

### 1. Menangkap Sinyal di JavaScript
Di bagian paling bawah view `login.blade.php`, JavaScript dipasang seperti radar untuk menangkap sinyal `login-success` dari PHP:
```javascript
document.addEventListener('login-success', function (event) {
    // Tampilkan elemen overlay putih/hijau yang tadinya disembunyikan
    document.getElementById('animationOverlay').style.display = 'flex';
    
    // Mulai hitung mundur selama 3500 milidetik (3.5 detik).
    // Waktu ini disediakan HANYA agar animasi CSS bisa selesai ditonton user.
    setTimeout(function() {
        // SETELAH 3.5 detik berakhir, BARULAH kita pindah halaman sungguhan
        window.location.href = event.detail.url; 
    }, 3500); 
});
```

### 2. Koreografi CSS (Keyframes)
Saat elemen `#animationOverlay` dimunculkan oleh JavaScript, CSS secara otomatis menjalankan urutan `animation` yang sudah kita definisikan lewat `@keyframes`.

**Gerakan 1: Logo Membesar, Naik, lalu Mengecil**
```css
@keyframes logoUpAndShrink {
    0%   { transform: translateY(100px) scale(1.6); opacity: 0; }
    30%  { transform: translateY(0px) scale(1.6); opacity: 1; }
    100% { transform: translateY(-50px) scale(0.6); opacity: 1; }
}
```
*Penjelasan*: Logo muncul dari bawah (`100px`) dalam keadaan besar (`scale 1.6`). Kemudian berhenti sejenak di tengah (`0px`), sebelum akhirnya melompat naik (`-50px`) sambil menyusut (`scale 0.6`).

**Gerakan 2: Logo Menggelinding ke Kiri**
```css
@keyframes rollLeft {
    0%   { transform: translateX(0) rotate(0deg); }
    100% { transform: translateX(-200px) rotate(-720deg); }
}
```
*Penjelasan*: Logo dipaksa bergeser sangat jauh ke kiri (`-200px`). Sambil bergeser, logo diputar melawan arah jarum jam sebanyak 2 putaran penuh (`-720 derajat`). Animasi ini diberi *delay* (jeda waktu) agar baru mulai setelah Gerakan 1 selesai.

**Gerakan 3: Teks "Eco Green" Menyelinap dari Belakang**
```css
@keyframes revealText {
    0%   { transform: translateX(-200px); opacity: 0; }
    100% { transform: translateX(30px); opacity: 1; }
}
```
*Penjelasan*: Pada awalnya (0%), teks disembunyikan persis di posisi akhir logo (`-200px`) dan tembus pandang (`opacity 0`). Lalu perlahan teks meluncur ke kanan (`30px`) sambil memunculkan wujudnya (`opacity 1`). Ini menciptakan ilusi optik seolah-olah teks tersebut keluar (ditarik) dari dalam logo yang sedang menggelinding.

---

### Kesimpulan
Melalui kombinasi maut antara:
1. **Livewire** (menahan refresh browser & komunikasi AJAX gaib)
2. **JavaScript Event Listener** (menunggu momen sukses & menghitung waktu pindah)
3. **CSS Keyframes** (koreografi 3D / transformasi visual)

Aplikasi Laravel Anda yang awalnya kaku, kini berubah layaknya aplikasi Single Page Application (SPA) modern yang estetik!
