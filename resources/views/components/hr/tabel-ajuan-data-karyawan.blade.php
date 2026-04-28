<div>
    <table class="w-full text-sm border-separate border-spacing-y-2">
        <thead class="bg-green-100 text-gray-600">
            <tr class="shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition">
                <th class="p-2 md:p-3 text-center text-xs md:text-sm w-12 whitespace-nowrap">No</th>
                <th class="p-2 md:p-3 text-left text-xs md:text-sm whitespace-nowrap">NIP</th>
                <th class="p-2 md:p-3 text-left text-xs md:text-sm uppercase whitespace-nowrap">Nama Karyawan</th>
                <th class="p-2 md:p-3 text-left text-xs md:text-sm uppercase whitespace-nowrap">Asal Vendor</th>
                <th class="p-2 md:p-3 text-center text-xs md:text-sm w-32 whitespace-nowrap">AKSI</th>
            </tr>
        </thead>

        <tbody>
            <tr onclick="openModal('240029222', 'Fairuz Kamala', 'fairuz.k@chemistry.id', '081233445566', 'Jl. Sudirman No. 10', 'PT. Chemistry Jaya')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">1</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029222</td>
                <td class="p-3 text-left whitespace-nowrap">Fairuz Kamala</td>
                <td class="p-3 text-left whitespace-nowrap">PT. Chemistry Jaya</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029222')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i>
                    </button>
                    <button onclick="event.stopPropagation(); inlineReject('240029222')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i>
                    </button>
                </td>
            </tr>

            <tr onclick="openModal('240029223', 'Ahmad Syauqi', 'ahmad.s@syauqi.com', '085711223344', 'Perum Harapan Indah', 'PT. TechSolution')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">2</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029223</td>
                <td class="p-3 text-left whitespace-nowrap">Ahmad Syauqi</td>
                <td class="p-3 text-left whitespace-nowrap">PT. TechSolution</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029223')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029223')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029224', 'Nabila Putri', 'nabila.p@gmail.com', '081988776655', 'Apartemen Menteng Atas', 'PT. CreativeDev')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">3</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029224</td>
                <td class="p-3 text-left whitespace-nowrap">Nabila Putri</td>
                <td class="p-3 text-left whitespace-nowrap">PT. CreativeDev</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029224')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029224')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029225', 'Dimas Anggara', 'dimas.an@outlook.com', '082155667788', 'Jl. Melati No. 45', 'PT. GlobalMaju')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">4</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029225</td>
                <td class="p-3 text-left whitespace-nowrap">Dimas Anggara</td>
                <td class="p-3 text-left whitespace-nowrap">PT. GlobalMaju</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029225')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029225')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029226', 'Rina Melati', 'rina.m@perusahaan.com', '089944332211', 'Cluster Pinang Mas', 'PT. SumberDana')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">5</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029226</td>
                <td class="p-3 text-left whitespace-nowrap">Rina Melati</td>
                <td class="p-3 text-left whitespace-nowrap">PT. SumberDana</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029226')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029226')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029227', 'Bima Sakti', 'bima.s@space.id', '081233440099', 'Jl. Antariksa No. 1', 'PT. GalaksiJaya')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">6</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029227</td>
                <td class="p-3 text-left whitespace-nowrap">Bima Sakti</td>
                <td class="p-3 text-left whitespace-nowrap">PT. GalaksiJaya</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029227')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029227')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029228', 'Thoiriq Muchlisqism', 'thoiriq.m@racing.com', '087766554433', 'Kavling Sirkuit No. 7', 'PT. FastSpeed')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">7</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029228</td>
                <td class="p-3 text-left whitespace-nowrap">Thoiriq Muchlisqism</td>
                <td class="p-3 text-left whitespace-nowrap">PT. FastSpeed</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); inlineApprove('240029228')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation(); inlineReject('240029228')"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-xmark"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <x-hr.modal-detail-karyawan />
    <x-hr.modal-alasan-penolakan />
</div>

<script>
    // Variabel Element Modal
    const detailModal = document.getElementById('detailModal');
    const detailModalBox = document.getElementById('detailModalContent');
    const rejectModal = document.getElementById('rejectModal');
    const rejectModalBox = document.getElementById('rejectModalContent');

    // ==========================================
    // FUNGSI UNTUK MODAL DETAIL KARYAWAN
    // ==========================================
    function openModal(nip, nama, email, telp, alamat, asal) {
        document.getElementById('modalNip').innerText = nip;
        document.getElementById('modalNama').innerText = nama;
        document.getElementById('modalEmail').innerText = email;
        document.getElementById('modalTelp').innerText = telp;
        document.getElementById('modalAlamat').innerText = alamat;
        document.getElementById('modalAsal').innerText = asal;

        detailModal.classList.remove('hidden');
        setTimeout(() => {
            detailModal.classList.remove('opacity-0');
            detailModalBox.classList.remove('scale-95');
            detailModalBox.classList.add('scale-100');
        }, 10);
    }

    function closeModal() {
        detailModal.classList.add('opacity-0');
        detailModalBox.classList.remove('scale-100');
        detailModalBox.classList.add('scale-95');

        setTimeout(() => {
            detailModal.classList.add('hidden');
        }, 200);
    }

    // ==========================================
    // FUNGSI AKSI (SETUJU / TOLAK)
    // ==========================================
    function approveAction() {
        let nip = document.getElementById('modalNip').innerText;
        alert(`Karyawan outsourcing ${nip} disetujui`);
        closeModal();
    }

    function inlineApprove(nip) {
        alert(`Karyawan outsourcing ${nip} disetujui`);
    }

    function openRejectModal() {
        // Tutup detail modal dengan animasi
        closeModal();

        // Buka reject modal setelah detail modal selesai tertutup (200ms)
        setTimeout(() => {
            rejectModal.classList.remove('hidden');
            setTimeout(() => {
                rejectModal.classList.remove('opacity-0');
                rejectModalBox.classList.remove('scale-95');
                rejectModalBox.classList.add('scale-100');
            }, 10);
        }, 200);
    }

    function inlineReject(nip) {
        document.getElementById('modalNip').innerText = nip;

        // Buka reject modal dari inline table
        rejectModal.classList.remove('hidden');
        setTimeout(() => {
            rejectModal.classList.remove('opacity-0');
            rejectModalBox.classList.remove('scale-95');
            rejectModalBox.classList.add('scale-100');
        }, 10);
    }

    function closeRejectModal() {
        rejectModal.classList.add('opacity-0');
        rejectModalBox.classList.remove('scale-100');
        rejectModalBox.classList.add('scale-95');

        setTimeout(() => {
            rejectModal.classList.add('hidden');
            document.getElementById('alasanPenolakan').value = ''; // Reset input
        }, 200);
    }

    function submitRejectAction() {
        let alasan = document.getElementById('alasanPenolakan').value;
        let nip = document.getElementById('modalNip').innerText;

        if (alasan.trim() === '') {
            alert('Alasan penolakan tidak boleh kosong!');
            return;
        }

        alert(`Karyawan outsourcing ${nip} ditolak dengan alasan: ${alasan}`);
        closeRejectModal();
    }

    // ==========================================
    // EVENT LISTENERS (Outside Click & Escape)
    // ==========================================
    window.addEventListener('click', function(event) {
        if (event.target === detailModal) {
            closeModal();
        }
        if (event.target === rejectModal) {
            closeRejectModal();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            // Prioritaskan menutup rejectModal jika sedang terbuka (karena ia berada di layer atas jika diakses berurutan)
            if (!rejectModal.classList.contains('hidden')) {
                closeRejectModal();
            } else if (!detailModal.classList.contains('hidden')) {
                closeModal();
            }
        }
    });
</script>
