document.addEventListener('login-success', function (event) {
    // Tampilkan layar overlay animasi
    const overlay = document.getElementById('animationOverlay');
    overlay.style.display = 'flex';

    // Tambahkan partikel bintang
    const stars = document.createElement('div');
    stars.classList.add('stars');
    overlay.appendChild(stars);

    // Tunggu sampai animasi selesai (sekitar 3 detik) sebelum memindahkan halaman
    setTimeout(function () {
        window.location.href = event.detail.url;
    }, 3500);
});
