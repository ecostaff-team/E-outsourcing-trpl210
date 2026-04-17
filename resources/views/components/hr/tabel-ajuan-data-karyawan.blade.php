<div>
    <table class="w-full text-sm border-separate border-spacing-y-2">
        <thead class="bg-green-100 text-gray-600">
            <tr class="shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-0.5 transition">
                <th class="p-2 md:p-3 text-center text-xs md:text-sm w-12 whitespace-nowrap">No</th>
                <th class="p-2 md:p-3 text-left text-xs md:text-sm whitespace-nowrap">NIP</th>
                <th class="p-2 md:p-3 text-left text-xs md:text-sm uppercase whitespace-nowrap">Nama Karyawan</th>
                <th class="p-2 md:p-3 text-center text-xs md:text-sm w-32 whitespace-nowrap">AKSI</th>
            </tr>
        </thead>

        <tbody>
            <tr onclick="openModal('240029222', 'Fairuz Kamala', 'fairuz.k@ecogreen.id', '081233445566', 'Jl. Sudirman No. 10', 'PT. EcoGreen')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">1</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029222</td>
                <td class="p-3 text-left whitespace-nowrap">Fairuz Kamala</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation(); alert('Diterima')"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm">
                        <i class="fas fa-check"></i>
                    </button>
                    <button onclick="event.stopPropagation(); alert('Ditolak')"
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
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029224', 'Nabila Putri', 'nabila.p@gmail.com', '081988776655', 'Apartemen Menteng Atas', 'PT. CreativeDev')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">3</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029224</td>
                <td class="p-3 text-left whitespace-nowrap">Nabila Putri</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029225', 'Dimas Anggara', 'dimas.an@outlook.com', '082155667788', 'Jl. Melati No. 45', 'PT. GlobalMaju')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">4</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029225</td>
                <td class="p-3 text-left whitespace-nowrap">Dimas Anggara</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029226', 'Rina Melati', 'rina.m@perusahaan.com', '089944332211', 'Cluster Pinang Mas', 'PT. SumberDana')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">5</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029226</td>
                <td class="p-3 text-left whitespace-nowrap">Rina Melati</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029227', 'Bima Sakti', 'bima.s@space.id', '081233440099', 'Jl. Antariksa No. 1', 'PT. GalaksiJaya')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">6</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029227</td>
                <td class="p-3 text-left whitespace-nowrap">Bima Sakti</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>

            <tr onclick="openModal('240029228', 'Thoiriq Muchlisqism', 'thoiriq.m@racing.com', '087766554433', 'Kavling Sirkuit No. 7', 'PT. FastSpeed')"
                class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 cursor-pointer transition-colors">
                <td class="p-3 text-center font-medium">7</td>
                <td class="p-3 text-left font-mono whitespace-nowrap">240029228</td>
                <td class="p-3 text-left whitespace-nowrap">Thoiriq Muchlisqism</td>
                <td class="p-3 text-center whitespace-nowrap">
                    <button onclick="event.stopPropagation();"
                        class="bg-green-500 hover:bg-green-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-check"></i></button>
                    <button onclick="event.stopPropagation();"
                        class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                            class="fas fa-xmark"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <x-hr.modal-detail-karyawan />
</div>

<script>
    function openModal(nip, nama, email, telp, alamat, asal) {
        // Mapping data ke elemen ID yang ada di x-hr.modal-detail-karyawan
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
        const modal = document.getElementById('detailModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
