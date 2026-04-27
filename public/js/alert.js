/**
 * Toast / Alert Notification System
 * Supports: success | error | warning | info
 * Usage:
 *   showToast('Data berhasil disimpan!');                    // success (default)
 *   showToast('Terjadi kesalahan!', 'error');
 *   showToast('Perhatian!', 'warning', 'Judul Kustom', 4000);
 */

const TOAST_DEFAULTS = {
    duration: 3500,   // ms sebelum auto-close
    variants: {
        success: { icon: '✅', title: 'Berhasil' },
        error: { icon: '❌', title: 'Gagal' },
        warning: { icon: '⚠️', title: 'Peringatan' },
        info: { icon: 'ℹ️', title: 'Informasi' },
    },
};

/**
 * Tampilkan toast notification.
 * @param {string} message  - Pesan yang ditampilkan
 * @param {string} type     - 'success' | 'error' | 'warning' | 'info'
 * @param {string} title    - (opsional) Override judul
 * @param {number} duration - (opsional) Durasi tampil dalam ms
 */
function showToast(message, type, title, duration) {
    type = type || 'success';
    duration = duration || TOAST_DEFAULTS.duration;

    const variant = TOAST_DEFAULTS.variants[type] || TOAST_DEFAULTS.variants.success;
    const label = title || variant.title;

    // Buat atau ambil container
    let container = document.getElementById('toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toast-container';
        document.body.appendChild(container);
    }

    // Buat elemen toast
    const card = document.createElement('div');
    card.className = 'toast-card toast-' + type;

    card.innerHTML = `
        <div class="toast-body">
            <span class="toast-icon">${variant.icon}</span>
            <div class="toast-content">
                <div class="toast-title">${label}</div>
                <div class="toast-message">${message}</div>
            </div>
            <button class="toast-close" aria-label="Tutup">✕</button>
        </div>
        <div class="toast-progress">
            <div class="toast-progress-fill" style="animation-duration: ${duration}ms;"></div>
        </div>
    `;

    container.appendChild(card);

    // Fungsi untuk menutup dengan animasi keluar
    // Pakai inline transition (lebih andal dari animationend setelah animasi masuk selesai)
    let dismissed = false;
    function dismiss() {
        if (dismissed) return;
        dismissed = true;
        card.style.transition = 'opacity 0.35s ease, transform 0.4s cubic-bezier(0.4, 0, 1, 1)';
        card.style.opacity = '0';
        card.style.transform = 'translateX(120%) scale(0.9)';
        setTimeout(() => card.remove(), 400);
    }

    // Tombol X
    card.querySelector('.toast-close').addEventListener('click', dismiss);

    // Auto-dismiss setelah durasi
    const timer = setTimeout(dismiss, duration);

    // Pause auto-dismiss saat mouse hover
    let hoverTimer;
    card.addEventListener('mouseenter', () => clearTimeout(timer));
    card.addEventListener('mouseleave', () => {
        clearTimeout(hoverTimer);
        hoverTimer = setTimeout(dismiss, 800);
    });
}

/**
 * Legacy: closeToast() – tetap kompatibel dengan kode lama
 */
function closeToast() {
    const cards = document.querySelectorAll('.toast-card');
    cards.forEach(card => {
        card.classList.add('toast-hiding');
        card.addEventListener('animationend', () => card.remove(), { once: true });
    });
}

// Panggil otomatis jika ada flash session message (opsional, untuk Laravel)
document.addEventListener('DOMContentLoaded', function () {
    const flashEl = document.getElementById('flash-message');
    if (flashEl) {
        showToast(
            flashEl.dataset.message || 'Data berhasil disimpan!',
            flashEl.dataset.type || 'success'
        );
    }
});
