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
            <tr onclick="openModal('240029222', 'Fairuz Kamala', 'fairuz.k@ecogreen.id', '081233445566', 'Jl. Sudirman No. 10', 'PT. EcoGreen')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">1</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029222</td>
                <td class="p-3 text-left whitespace-nowrap">Fairuz Kamala</td>
                <td class="p-3 text-left whitespace-nowrap">PT. EcoGreen</td>
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
    // FUNGSI UNTUK MODAL DETAIL KARYAWAN
    function openModal(nip, nama, email, telp, alamat, asal) {
        // Mapping data ke elemen ID yang ada di modal detail
        document.getElementById('modalNip').innerText = nip;
        document.getElementById('modalNama').innerText = nama;
        document.getElementById('modalEmail').innerText = email;
        document.getElementById('modalTelp').innerText = telp;
        document.getElementById('modalAlamat').innerText = alamat;
        document.getElementById('modalAsal').innerText = asal;

        const modal = document.getElementById('detailModal');
        modal.classList.remove('hidden');

        // Animasi fade in
        modal.style.opacity = "0";
        setTimeout(() => {
            modal.style.opacity = "1";
            modal.style.transition = "opacity 0.2s ease-in-out";
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('detailModal');
        modal.classList.add('hidden');
    }

    // Tutup saat klik di luar box modal
    window.onclick = function(event) {
        const detailModal = document.getElementById('detailModal');
        const rejectModal = document.getElementById('rejectModal');

        if (event.target == detailModal) {
            closeModal();
        } else if (event.target == rejectModal) {
            closeRejectModal();
        }
    }


    // FUNGSI AKSI (SETUJU / TOLAK)

    // Aksi Setuju lewat Modal Detail
    function approveAction() {
        let nip = document.getElementById('modalNip').innerText;
        alert(`Karyawan outsourcing ${nip} disetujui`);
        closeModal();
    }

    // Aksi Setuju langsung dari Tabel (Inline)
    function inlineApprove(nip) {
        alert(`Karyawan outsourcing ${nip} disetujui`);
    }

    // Aksi Tolak lewat Modal Detail (Membuka Modal Tolak)
    function openRejectModal() {
        document.getElementById('detailModal').classList.add('hidden');
        document.getElementById('rejectModal').classList.remove('hidden');
    }

    // Aksi Tolak langsung dari Tabel (Inline)
    function inlineReject(nip) {
        // Simpan NIP ke elemen modal hidden agar bisa diambil oleh tombol kirim
        document.getElementById('modalNip').innerText = nip;
        document.getElementById('rejectModal').classList.remove('hidden');
    }

    function closeRejectModal() {
        document.getElementById('rejectModal').classList.add('hidden');
        document.getElementById('alasanPenolakan').value = '';
    }

    // Fungsi Final: Mengirim Alasan Penolakan
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
</script>
