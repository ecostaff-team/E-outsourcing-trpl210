        document.addEventListener('login-success', function (event) {
            // Tampilkan layar overlay animasi
            const overlay = document.getElementById('animationOverlay');
            overlay.style.display = 'flex';

            // Tunggu sampai animasi selesai (sekitar 3 detik) sebelum memindahkan halaman
            setTimeout(function() {
                window.location.href = event.detail.url;
            }, 3500);
        });
