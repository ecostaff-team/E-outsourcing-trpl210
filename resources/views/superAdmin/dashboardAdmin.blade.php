<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>

    <title>Document</title>
</head>

<body class="bg-gray-100" style="font-family: 'Poppins', sans-serif;">

<!-- TOPBAR -->
<div class="bg-linear-to-r from-green-900 to-green-700 px-10 h-16 flex items-center justify-between text-white shadow">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center">🌿</div>
    <div>
      <h1 class="text-sm font-extrabold">OutsourceMS</h1>
      <p class="text-[11px] text-green-200">Sistem Manajemen Tenaga Outsourcing</p>
    </div>
  </div>
  <div class="bg-white/10 px-4 py-1.5 rounded-lg flex items-center gap-2 border border-white/20">
    <div class="w-7 h-7 bg-green-400 rounded-full flex items-center justify-center text-green-900 font-bold text-xs">SA</div>
    <span class="text-sm font-semibold">Super Admin</span>
  </div>
</div>


<div class="p-4 md:p-8 lg:p-10">
  <h1 class="text-2xl font-semibold">Kelola Akun Pengguna</h1>
  <p class="text-sm text-gray-500 mb-4">Tambah, ubah, dan hapus akun Admin Outsourcing, HR, dan Kepala Departemen</p>



<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-pink-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-user text-pink-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Admin Outsourcing</p>
      <h3 class="text-xl font-bold text-gray-800">7</h3>
    </div>
  </div>

  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-yellow-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-user-tie text-yellow-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">HR</p>
      <h3 class="text-xl font-bold text-gray-800">5</h3>
    </div>
  </div>

  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-chalkboard-teacher text-gray-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Kepala Departemen</p>
      <h3 class="text-xl font-bold text-gray-800">6</h3>
    </div>
  </div>

  <div class="bg-green-50 rounded-xl p-4 shadow flex items-center gap-4 border border-green-200">
    <div class="w-12 h-12 bg-green-200 flex items-center justify-center rounded-xl">
      <i class="fas fa-users text-green-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Total</p>
      <h3 class="text-xl font-bold text-green-700">18</h3>
    </div>
  </div>
</div>

  <!-- TABS -->
<div class="bg-white px-4 md:px-10 border-gray-200 border-b border-t flex gap-6 text-sm overflow-x-auto">
  <button onclick="switchTab('admin')" id="tabAdmin" class="py-3 border-b-2 border-green-600 text-green-700 font-semibold">
  Admin Outsourcing
</button>
  <button onclick="switchTab('hr')" id="tabHR" class="py-3 text-gray-500">
  HR Perusahaan
</button>
  <button onclick="switchTab('kepala')" id="tabKepala" class="py-3 text-gray-500">
  Kepala Departemen
</button>
</div>



  <div class="bg-white p-8 rounded-lg shadow-lg mt-6">
    <div class="flex flex-col md:flex-row md:justify-between gap-3 mb-4">
      <div class="flex flex-col sm:flex-row gap-2">
        <input type="text" placeholder="Cari nama atau email" class="border border-gray-500 rounded-lg px-3 py-2 text-sm w-64 focus:ring-2 focus:ring-green-500 outline-none">
        <select class="border border-gray-500 rounded-lg px-3 py-2 text-sm w-64 focus:ring-2 focus:ring-green-500 outline-none">
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Nonaktif</option>
        </select>
      </div>
      <button class="bg-green-600 shadow-lg text-white px-4 py-2 rounded-lg text-sm">+ Tambah Akun</button>
    </div>

    <div class="overflow-x-auto">
  <table class="w-full text-sm border-separate border-spacing-y-2">

    <thead class="bg-gray-100 text-gray-600">
      <tr class=" shadow-sm hover:shadow-md hover:-translate-y-0.5 transition cursor-pointer border border-gray-100">
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NO</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NAMA PENGGUNA</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">EMAIL</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">STATUS</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NO TELP</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">DIBUAT</th>
        <th class="p-2 md:p-3 text-center text-xs md:text-sm">AKSI</th>
      </tr>
    </thead>

    <tbody id="userTable"></tbody>

  </table>
</div>

    <div class="flex justify-end mt-4 gap-1 text-sm">
      <button class="px-3 py-1 border rounded">Previous</button>
      <button class="px-3 py-1 bg-green-600 text-white rounded">1</button>
      <button class="px-3 py-1 border rounded">2</button>
      <button class="px-3 py-1 border rounded">3</button>
      <button class="px-3 py-1 border rounded">Next</button>
    </div>
  </div>
</div>



<!-- MODAL TAMBAH AKUN -->
<div id="modalTambah" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 px-4">
  <div class="bg-white w-full max-w-xl rounded-xl overflow-y-auto shadow-lg">
    
    <!-- HEADER -->
    <div class="bg-green-700 text-white px-5 py-4 flex justify-between items-center">
      <div>
        <h3 class="font-semibold text-lg">Tambah Akun</h3>
        <p class="text-xs text-green-200">Isi semua kolom yang wajib diisi</p>
      </div>
      <button onclick="closeModal()" class="text-white text-xl">✕</button>
    </div>

    <!-- BODY -->
    <div class="p-10 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
      <div>
        <label class="font-bold">Nama Depan <span class="text-red-500">*</span></label>
        <input type="text" placeholder="Contoh: Rizky" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
      <div>
        <label class="font-bold">Nama Belakang <span class="text-red-500">*</span></label>
        <input type="text" placeholder="Contoh: Darmawan" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>

      <div class="md:col-span-2">
        <label class="font-bold">Email <span class="text-red-500">*</span></label>
        <input type="email" placeholder="email@domain.co.id" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
      <div class="md:col-span-2">
        <label class="font-bold">No Telepon <span class="text-red-500">*</span></label>
        <input type="text" placeholder="Contoh: 081234567890" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
      

      <div class="md:col-span-2">
        <label class="font-bold">Role <span class="text-red-500">*</span></label>
        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
          <option>--- Pilih Role ---</option>
          <option>--- Pilih Role ---</option>
          <option>--- Pilih Role ---</option>
          <option>--- Pilih Role ---</option>
        </select>
      </div>

      <div>
        <label class="font-bold">Password <span class="text-red-500">*</span></label>
        <input type="password" placeholder="Min. 8 Karakter" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
      <div>
        <label class="font-bold">Konfirmasi Password <span class="text-red-500">*</span></label>
        <input type="password" placeholder="Ulangi Password" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
    </div>

    <!-- FOOTER -->
    <div class="flex flex-col md:flex-row justify-end gap-3 px-5 py-4 border-t border-gray-200">
      <button onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-lg w-full md:w-auto hover:bg-w-800 hover:shadow-2xl transform hover:-translate-y-0.5 transition-all duration-200">Batal</button>
      <button class="px-4 py-2 bg-green-700 text-white rounded-lg w-full md:w-auto shadow-xl hover:bg-green-800 hover:shadow-2xl transform hover:-translate-y-0.5 transition-all duration-200">Simpan</button>
    </div>
  </div>
</div>

<script>
function openModal(){
  document.getElementById('modalTambah').classList.remove('hidden');
  document.getElementById('modalTambah').classList.add('flex');
}

function closeModal(){
  document.getElementById('modalTambah').classList.add('hidden');
}

// HUBUNGKAN KE BUTTON TAMBAH
const btnTambah = document.querySelectorAll('button');
btnTambah.forEach(btn => {
  if(btn.innerText.includes('Tambah')){
    btn.addEventListener('click', openModal);
  }
});
</script>




<script>
const adminList = [
  {nama: "Rizky Darmawan", email: "rizky.darmawan@vendor.co.id", status: "Aktif", telp: "085762360846", tanggal: "10 Apr 2026"},
  {nama: "Carmen Ayu", email: "carmen.ayu@vendor.co.id", status: "Tidak Aktif", telp: "089677228168", tanggal: "10 Apr 2026"},
  {nama: "Dika Pratama", email: "dika@vendor.co.id", status: "Aktif", telp: "0811111111", tanggal: "11 Apr 2026"},
  {nama: "Sinta Dewi", email: "sinta@vendor.co.id", status: "Aktif", telp: "0822222222", tanggal: "12 Apr 2026"},
  {nama: "Agus Salim", email: "agus@vendor.co.id", status: "Tidak Aktif", telp: "0833333333", tanggal: "13 Apr 2026"},
  {nama: "Beni Saputra", email: "beni@vendor.co.id", status: "Aktif", telp: "0844444444", tanggal: "14 Apr 2026"},
  {nama: "Rina Putri", email: "rina@vendor.co.id", status: "Aktif", telp: "0855555555", tanggal: "15 Apr 2026"},
  {nama: "Fajar Hadi", email: "fajar@vendor.co.id", status: "Tidak Aktif", telp: "0866666666", tanggal: "16 Apr 2026"},
  {nama: "Lina Sari", email: "lina@vendor.co.id", status: "Aktif", telp: "0877777777", tanggal: "17 Apr 2026"},
  {nama: "Yudi Hartono", email: "yudi@vendor.co.id", status: "Aktif", telp: "0888888888", tanggal: "18 Apr 2026"}
];

const hrList = [
  {nama: "Andi Saputra", email: "andi.hr@company.co.id", status: "Aktif", telp: "08123456789", tanggal: "12 Apr 2026"},
  {nama: "Dewi Lestari", email: "dewi.hr@company.co.id", status: "Aktif", telp: "0821111111", tanggal: "13 Apr 2026"},
  {nama: "Rudi Hartono", email: "rudi.hr@company.co.id", status: "Tidak Aktif", telp: "0832222222", tanggal: "14 Apr 2026"},
  {nama: "Sari Melati", email: "sari.hr@company.co.id", status: "Aktif", telp: "0843333333", tanggal: "15 Apr 2026"},
  {nama: "Fahmi Akbar", email: "fahmi.hr@company.co.id", status: "Aktif", telp: "0854444444", tanggal: "16 Apr 2026"},
  {nama: "Lina Kusuma", email: "lina.hr@company.co.id", status: "Tidak Aktif", telp: "0865555555", tanggal: "17 Apr 2026"},
  {nama: "Yoga Pratama", email: "yoga.hr@company.co.id", status: "Aktif", telp: "0876666666", tanggal: "18 Apr 2026"},
  {nama: "Nina Sari", email: "nina.hr@company.co.id", status: "Aktif", telp: "0887777777", tanggal: "19 Apr 2026"},
  {nama: "Arif Setiawan", email: "arif.hr@company.co.id", status: "Aktif", telp: "0898888888", tanggal: "20 Apr 2026"},
  {nama: "Putri Ayu", email: "putri.hr@company.co.id", status: "Tidak Aktif", telp: "0819999999", tanggal: "21 Apr 2026"}
];

  const kepalaList = [
  {nama: "Budi Santoso", email: "budi@company.co.id", status: "Aktif", telp: "082233445566", tanggal: "15 Apr 2026"},
  {nama: "Hendra Wijaya", email: "hendra@company.co.id", status: "Aktif", telp: "0811111111", tanggal: "16 Apr 2026"},
  {nama: "Tono Saputra", email: "tono@company.co.id", status: "Tidak Aktif", telp: "0822222222", tanggal: "17 Apr 2026"},
  {nama: "Agung Prasetyo", email: "agung@company.co.id", status: "Aktif", telp: "0833333333", tanggal: "18 Apr 2026"},
  {nama: "Dedi Kurniawan", email: "dedi@company.co.id", status: "Aktif", telp: "0844444444", tanggal: "19 Apr 2026"},
  {nama: "Rizal Maulana", email: "rizal@company.co.id", status: "Tidak Aktif", telp: "0855555555", tanggal: "20 Apr 2026"},
  {nama: "Ilham Fauzi", email: "ilham@company.co.id", status: "Aktif", telp: "0866666666", tanggal: "21 Apr 2026"},
  {nama: "Bagus Setiawan", email: "bagus@company.co.id", status: "Aktif", telp: "0877777777", tanggal: "22 Apr 2026"},
  {nama: "Reza Firmansyah", email: "reza@company.co.id", status: "Aktif", telp: "0888888888", tanggal: "23 Apr 2026"},
  {nama: "Dian Permata", email: "dian@company.co.id", status: "Tidak Aktif", telp: "0899999999", tanggal: "24 Apr 2026"}
];

const table = document.getElementById('userTable');

function renderTable(data){
  table.innerHTML = data.map((item, index) => `
    <tr class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
      <td class="p-3">${index + 1}</td>
      <td class="p-3">${item.nama}</td>
      <td class="p-3">${item.email}</td>
      <td class="p-3">
        <span class="${item.status === 'Aktif' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'} px-2 py-1 rounded text-xs">
          ${item.status}
        </span>
      </td>
      <td class="p-3">${item.telp}</td>
      <td class="p-3">${item.tanggal}</td>
      <td class="p-3 text-center">
        <button onclick="event.stopPropagation(); editUser('${item.nama}')" class="bg-yellow-400 px-2 py-1 rounded">
          <i class="fas fa-pen"></i>
        </button>
        <button onclick="event.stopPropagation(); openHapus('${item.nama}')" class="bg-red-500 text-white px-2 py-1 rounded">
          <i class="fas fa-trash"></i>
        </button>
      </td>
    </tr>
  `).join('');
}


function switchTab(tab){
  if(tab === 'admin'){
    renderTable(adminList);
  }
  if(tab === 'hr'){
    renderTable(hrList);
  }
  if(tab === 'kepala'){
    renderTable(kepalaList);
  }

table.innerHTML = `
<tr onclick="rowClick('Rizky')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">1</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">2</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Rizky')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">3</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">4</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Rizky')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">5</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">6</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">Tidak Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
`;
origin/gabung-user

  document.getElementById('tabAdmin').className = "py-3 text-gray-500";
  document.getElementById('tabHR').className = "py-3 text-gray-500";
  document.getElementById('tabKepala').className = "py-3 text-gray-500";

  if(tab === 'admin'){
    document.getElementById('tabAdmin').className = "py-3 border-b-2 border-green-600 text-green-700 font-semibold";
  }
  if(tab === 'hr'){
    document.getElementById('tabHR').className = "py-3 border-b-2 border-green-600 text-green-700 font-semibold";
  }
  if(tab === 'kepala'){
    document.getElementById('tabKepala').className = "py-3 border-b-2 border-green-600 text-green-700 font-semibold";
  }
}


</script>




<!-- MODAL HAPUS -->
<div id="modalHapus" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 px-4">
  <div class="bg-white w-full max-w-md rounded-2xl shadow-lg text-center p-6">
    
    <div class="flex justify-center mb-4">
      <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center text-3xl">🗑️</div>
    </div>

    <h3 class="text-lg font-semibold mb-2">Hapus Akun?</h3>
    <p class="text-sm text-gray-500 mb-6">
      Akun <span id="namaHapus" class="font-semibold text-gray-700"></span> akan dihapus permanen.<br>
      Tindakan ini tidak dapat diurungkan.
    </p>

    <div class="flex flex-col md:flex-row gap-3 justify-center">
      <button onclick="closeHapus()" class="px-4 py-2 border rounded-lg w-full md:w-auto">Batal</button>
      <button class="px-4 py-2 bg-red-600 text-white rounded-lg w-full md:w-auto">Ya, Hapus</button>
    </div>

  </div>
</div>

<script>
function openHapus(nama){
  document.getElementById('namaHapus').innerText = nama;
  const modal = document.getElementById('modalHapus');
  modal.classList.remove('hidden');
  modal.classList.add('flex');
}

function closeHapus(){
  const modal = document.getElementById('modalHapus');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
}

// HUBUNGKAN KE TOMBOL DELETE
function deleteUser(name){
  openHapus(name);
}
</script>

<div id="modalEdit" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 px-4">
  <div class="bg-white w-full max-w-xl rounded-xl overflow-y-auto shadow-lg">

    <div class="bg-green-700 text-white px-5 py-4 flex justify-between items-center">
      <h3 class="font-semibold text-lg">Edit Akun</h3>
      <button onclick="closeEdit()" class="text-white text-xl">✕</button>
    </div>

    <div class="p-10 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
      <div>
        <label class="font-bold">Nama Depan <span class="text-red-500">*</span></label>
        <input id="editNama" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>

      <div>
        <label class="font-bold">Nama Belakang <span class="text-red-500">*</span></label>
        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>

      <div class="md:col-span-2">
        <label class="font-bold">Email <span class="text-red-500">*</span></label>
        <input type="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1" id="editEmail">
      </div>

      <div class="md:col-span-2">
        <label class="font-bold">No Telepon <span class="text-red-500">*</span></label>
        <input type="text" id="editNomor" placeholder="Contoh: 081234567890" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>

      
      <div>
        <label class="font-bold">Password <span class="text-red-500">*</span></label>
        <input type="password" placeholder="Password baru" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>

      <div>
        <label class="font-bold">Konfirmasi Password <span class="text-red-500">*</span></label>
        <input type="password" placeholder="Konfirmasi" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1">
      </div>
    </div>

    <div class="flex flex-col md:flex-row justify-end gap-3 px-5 py-4 border-t border-gray-200">
      <button onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-lg w-full md:w-auto hover:bg-w-800 hover:shadow-2xl transform hover:-translate-y-0.5 transition-all duration-200">Batal</button>
      <button class="px-4 py-2 bg-green-700 text-white rounded-lg w-full md:w-auto shadow-xl hover:bg-green-800 hover:shadow-2xl transform hover:-translate-y-0.5 transition-all duration-200">Simpan</button>
    </div>

  </div>
</div>
<script>
function editUser(name){
  document.getElementById('editNama').value = name;
  document.getElementById('editEmail').value = name.toLowerCase().replace(' ', '.') + '@vendor.co.id';


  const modal = document.getElementById('modalEdit');
  modal.classList.remove('hidden');
  modal.classList.add('flex');
}

function closeEdit(){
  const modal = document.getElementById('modalEdit');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
}


</script>

<script>
switchTab('admin');
</script>

</body>
</html>
