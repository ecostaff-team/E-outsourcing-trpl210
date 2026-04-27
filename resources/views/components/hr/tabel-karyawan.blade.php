<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm border-separate border-spacing-y-2">
            <thead class="bg-green-100 text-gray-600">
                <tr class="shadow-sm hover:shadow-md hover:-translate-y-0.5 transition border border-gray-100">
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">No</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">NIP</th>
                    <th class="p-2 md:p-3 text-left text-xs md:text-sm whitespace-nowrap">Nama Karyawan</th>
                    <th class="p-2 md:p-3 text-left text-xs md:text-sm whitespace-nowrap">Asal Vendor</th>
                    <th class="p-2 md:p-3 text-left text-xs md:text-sm whitespace-nowrap">Email</th>
                    <th class="p-2 md:p-3 text-left text-xs md:text-sm min-w-50">Alamat</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">Tanggal Masuk</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">Tanggal Keluar</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">No Telp</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">Status</th>
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">1</td>
                    <td class="p-3 text-center whitespace-nowrap">240028930</td>
                    <td class="p-3 text-left whitespace-nowrap">Rizky Darmawan</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. Chemistry Jaya</td>
                    <td class="p-3 text-left">rizky@email.com</td>
                    <td class="p-3 text-left">Jl. SukaBumi no. 15</td>
                    <td class="p-3 text-center whitespace-nowrap">10 Apr 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">081729848046</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028930', 'Rizky Darmawan', 'PT. Chemistry Jaya', 'rizky@email.com', 'Jl. SukaBumi no. 15', '081729848046')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028930', 'Rizky Darmawan')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">2</td>
                    <td class="p-3 text-center whitespace-nowrap">240028931</td>
                    <td class="p-3 text-left whitespace-nowrap">Siti Aminah</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. TechSolution</td>
                    <td class="p-3 text-left">siti.aminah@email.com</td>
                    <td class="p-3 text-left">Jl. Melati Putih No. 8, Blok C</td>
                    <td class="p-3 text-center whitespace-nowrap">15 Feb 2024</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">081234567890</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028931', 'Siti Aminah', 'PT. TechSolution', 'siti.aminah@email.com', 'Jl. Melati Putih No. 8, Blok C', '081234567890')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028931', 'Siti Aminah')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr
                    class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer text-gray-500">
                    <td class="p-3 text-center">3</td>
                    <td class="p-3 text-center whitespace-nowrap">240028932</td>
                    <td class="p-3 text-left whitespace-nowrap">Budi Santoso</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. GlobalMaju</td>
                    <td class="p-3 text-left">budi.s@email.com</td>
                    <td class="p-3 text-left">Komp. Mawar Indah No. 22</td>
                    <td class="p-3 text-center whitespace-nowrap">10 Jan 2023</td>
                    <td class="p-3 text-center whitespace-nowrap">01 Mar 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">085678901234</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-semibold">Non-Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028932', 'Budi Santoso', 'PT. GlobalMaju', 'budi.s@email.com', 'Komp. Mawar Indah No. 22', '085678901234')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button
                                class="bg-gray-400 hover:bg-gray-500 transition text-white px-2 py-1 rounded shadow-sm cursor-not-allowed"
                                disabled><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">4</td>
                    <td class="p-3 text-center whitespace-nowrap">240028933</td>
                    <td class="p-3 text-left whitespace-nowrap">Ayu Lestari</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. CreativeDev</td>
                    <td class="p-3 text-left">ayulestari@email.com</td>
                    <td class="p-3 text-left">Jl. Kenangan Selatan No. 45</td>
                    <td class="p-3 text-center whitespace-nowrap">05 Apr 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">089876543210</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028933', 'Ayu Lestari', 'PT. CreativeDev', 'ayulestari@email.com', 'Jl. Kenangan Selatan No. 45', '089876543210')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028933', 'Ayu Lestari')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">5</td>
                    <td class="p-3 text-center whitespace-nowrap">240028934</td>
                    <td class="p-3 text-left whitespace-nowrap">Rian Mahfud</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. TechSolution</td>
                    <td class="p-3 text-left">rian.mahfud@email.com</td>
                    <td class="p-3 text-left">Jl. Kenangan Delima No. 49</td>
                    <td class="p-3 text-center whitespace-nowrap">12 Apr 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">089876547667</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028934', 'Rian Mahfud', 'PT. Nusantara Abadi', 'rian.mahfud@email.com', 'Jl. Kenangan Delima No. 49', '089876547667')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028934', 'Rian Mahfud')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">6</td>
                    <td class="p-3 text-center whitespace-nowrap">240028935</td>
                    <td class="p-3 text-left whitespace-nowrap">Kartika Putri</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. GlobalMaju</td>
                    <td class="p-3 text-left">kartika.p@email.com</td>
                    <td class="p-3 text-left">Komp. Permata Hijau Blok B/1</td>
                    <td class="p-3 text-center whitespace-nowrap">20 Jan 2025</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">081334455667</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028935', 'Kartika Putri', 'PT. GlobalMaju', 'kartika.p@email.com', 'Komp. Permata Hijau Blok B/1', '081334455667')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028935', 'Kartika Putri')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer text-gray-500">
                    <td class="p-3 text-center">7</td>
                    <td class="p-3 text-center whitespace-nowrap">240028936</td>
                    <td class="p-3 text-left whitespace-nowrap">Doni Setiawan</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. TechSolution</td>
                    <td class="p-3 text-left">doni.set@email.com</td>
                    <td class="p-3 text-left">Jl. Merdeka Raya No. 10</td>
                    <td class="p-3 text-center whitespace-nowrap">05 Mei 2024</td>
                    <td class="p-3 text-center whitespace-nowrap">25 Jan 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">087788990011</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-semibold">Non-Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028936', 'Doni Setiawan', 'PT. TechSolution', 'doni.set@email.com', 'Jl. Merdeka Raya No. 10', '087788990011')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button
                                class="bg-gray-400 hover:bg-gray-500 transition text-white px-2 py-1 rounded shadow-sm cursor-not-allowed"
                                disabled><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    <td class="p-3 text-center">8</td>
                    <td class="p-3 text-center whitespace-nowrap">240028937</td>
                    <td class="p-3 text-left whitespace-nowrap">Fajar Hidayat</td>
                    <td class="p-3 text-left whitespace-nowrap">PT. Chemistry Jaya</td>
                    <td class="p-3 text-left">fajar.hid@email.com</td>
                    <td class="p-3 text-left">Jl. Anggrek Selatan No. 3</td>
                    <td class="p-3 text-center whitespace-nowrap">20 Apr 2026</td>
                    <td class="p-3 text-center whitespace-nowrap">-</td>
                    <td class="p-3 text-center whitespace-nowrap">082211334455</td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-semibold">Aktif</span>
                    </td>
                    <td class="p-3 text-center whitespace-nowrap">
                        <div class="flex justify-center items-center gap-2">
                            <button
                                onclick="event.stopPropagation(); openEditModal('240028937', 'Fajar Hidayat', 'PT. Chemistry Jaya', 'fajar.hid@email.com', 'Jl. Anggrek Selatan No. 3', '082211334455')"
                                class="bg-yellow-500 hover:bg-yellow-600 transition text-black px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-pen"></i></button>
                            <button onclick="event.stopPropagation(); confirmDelete('240028937', 'Fajar Hidayat')"
                                class="bg-red-500 hover:bg-red-600 transition text-white px-2 py-1 rounded shadow-sm"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('components.hr.modal-edit-karyawan')
</div>

<script>
    // --- FUNGSI EDIT KARYAWAN ---

    function openEditModal(nip, nama, vendor, email, alamat, telp) {
        // Isi input form modal dengan data yang dilempar dari tombol tabel
        document.getElementById('editNip').value = nip;
        document.getElementById('editNama').value = nama;
        document.getElementById('editVendor').value = vendor;
        document.getElementById('editEmail').value = email;
        document.getElementById('editAlamat').value = alamat;
        document.getElementById('editTelp').value = telp;

        // Tampilkan Modal
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }

    function submitEditForm(event) {
        // Mencegah halaman refresh (default form behavior)
        event.preventDefault();

        let nip = document.getElementById('editNip').value;
        let nama = document.getElementById('editNama').value;

        // Validasi dan aksi simpan aslinya di sini (seperti fetch ke backend)

        // Menampilkan alert JS plain jika berhasil
        alert(`Berhasil! Data karyawan ${nama} (${nip}) telah diperbarui.`);

        // Tutup modal
        closeEditModal();
    }

    // --- FUNGSI HAPUS KARYAWAN ---

    function confirmDelete(nip, nama) {
        // Menampilkan popup konfirmasi bawaan browser
        let isConfirmed = confirm(
            `Apakah Anda yakin ingin menghapus data karyawan: ${nama} (${nip})? \nData yang dihapus tidak dapat dikembalikan.`
        );

        if (isConfirmed) {
            // Tampilkan alert JS plain jika user menekan 'OK'
            alert(`Sistem: Data karyawan ${nama} dengan NIP ${nip} telah berhasil dihapus.`);

            // Di sini nanti diletakkan kode untuk menghapus baris di frontend
            // atau memanggil API Laravel untuk menghapus data di database.
        }
    }
</script>
