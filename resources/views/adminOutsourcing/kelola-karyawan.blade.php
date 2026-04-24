<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Karyawan Admin Outsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

    <div class="flex">

        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
        ['title' => 'Dashboard', 'icon' => 'fas fa-home'],
        ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-users'],
        ['title' => 'Kelola Karyawan', 'icon' => 'fas fa-user-cog'],
    ]">Admin Outsourcing</x-sidebar>

        {{-- MAIN CONTENT --}}
        <div class="flex-1 p-6">

            {{-- HEADER --}}
            <x-header>Admin Outsourcing</x-header>

            {{-- TABEL KARYAWAN --}}
            <div class="bg-white rounded-2xl shadow-md p-6 mt-6" x-data="{
                karyawans: [
                    { id: 1, nim: '2021001', nama_lengkap: 'Budi Santoso',   email: 'budi@email.com',   nomor_telepon: '081234567890', alamat: 'Jl. Merdeka No. 1, Jakarta' },
                    { id: 2, nim: '2021002', nama_lengkap: 'Siti Rahayu',    email: 'siti@email.com',    nomor_telepon: '082345678901', alamat: 'Jl. Sudirman No. 5, Bandung' },
                    { id: 3, nim: '2021003', nama_lengkap: 'Ahmad Fauzi',    email: 'ahmad@email.com',   nomor_telepon: '083456789012', alamat: 'Jl. Gatot Subroto No. 10, Surabaya' },
                    { id: 4, nim: '2021004', nama_lengkap: 'Dewi Anggraini', email: 'dewi@email.com',    nomor_telepon: '084567890123', alamat: 'Jl. Diponegoro No. 3, Yogyakarta' },
                    { id: 5, nim: '2021005', nama_lengkap: 'Rizky Pratama',  email: 'rizky@email.com',   nomor_telepon: '085678901234', alamat: 'Jl. Ahmad Yani No. 7, Medan' },
                ],
                showEditModal: false,
                showDeleteModal: false,
                showDetailModal: false,
                selectedKaryawan: {},
                openEdit(karyawan) {
                    this.selectedKaryawan = { ...karyawan };
                    this.showEditModal = true;
                },
                openDelete(karyawan) {
                    this.selectedKaryawan = { ...karyawan };
                    this.showDeleteModal = true;
                },
                openDetail(karyawan) {
                    this.selectedKaryawan = { ...karyawan };
                    this.showDetailModal = true;
                }
            }">

                {{-- Judul & Tombol Tambah --}}
                <div class="flex items-center justify-between mb-2">
                    <h2 class="text-xl font-semibold text-black-700">Data Karyawan</h2>
                </div>

                <!-- SEARCH + ICON -->
                <div class="flex items-center gap-2 mb-4">

                    <!-- SEARCH -->
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Cari nama karyawan"
                            class="border rounded-lg pl-10 pr-4 py-1 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <span class="absolute left-3 top-1.5 text-gray-400">🔍</span>
                    </div>

                </div>


                {{-- Tabel --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-black-600">
                        <thead class="bg-gray-50 text-black-500 uppercase text-xs">
                            <tr>
                                <th class="px-4 py-3 rounded-tl-lg">No</th>
                                <th class="px-4 py-3">NIM</th>
                                <th class="px-4 py-3">Nama Lengkap</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Nomor Telepon</th>
                                <th class="px-4 py-3">Alamat</th>
                                <th class="px-4 py-3 rounded-tr-lg text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">

                            <template x-for="(karyawan, index) in karyawans" :key="karyawan.id">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3" x-text="index + 1"></td>
                                    <td class="px-4 py-3 font-medium text-gray-800" x-text="karyawan.nim"></td>
                                    <td class="px-4 py-3" x-text="karyawan.nama_lengkap"></td>
                                    <td class="px-4 py-3" x-text="karyawan.email"></td>
                                    <td class="px-4 py-3" x-text="karyawan.nomor_telepon"></td>
                                    <td class="px-4 py-3 max-w-xs truncate" x-text="karyawan.alamat"></td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center justify-center gap-2">

                                            {{-- Tombol Edit --}}
                                            <button @click="openEdit(karyawan)"
                                                class="inline-flex items-center gap-1 text-xs bg-blue-100 hover:bg-blue-200 text-blue-700 px-3 py-1.5 rounded-lg transition"
                                                title="Edit">
                                                <i class="fas fa-pen"></i>
                                            </button>

                                            {{-- Tombol Hapus --}}
                                            <button @click="openDelete(karyawan)"
                                                class="inline-flex items-center gap-1 text-xs bg-red-100 hover:bg-red-200 text-red-700 px-3 py-1.5 rounded-lg transition"
                                                title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                </div>

                <div class="flex flex-wrap justify-end mt-4 gap-1 text-sm">
                    <button
                        class="px-3 py-1 transition-colors hover:bg-blue-500 hover:text-white border hover:border-transparent rounded cursor-pointer">Previous</button>
                    <button class="px-3 py-1 bg-green-600 text-white rounded">1</button>
                    <button
                        class="px-3 py-1 transition-colors hover:bg-green-600 hover:text-white border hover:border-transparent rounded cursor-pointer">2</button>
                    <button
                        class="px-3 py-1 transition-colors hover:bg-green-600 hover:text-white border hover:border-transparent rounded cursor-pointer">3</button>
                    <button
                        class="px-3 py-1 transition-colors hover:bg-blue-500 hover:text-white border hover:border-transparent rounded cursor-pointer">Next</button>
                </div>

                {{-- MODAL DETAIL (Read) --}}
                <div x-show="showDetailModal" x-cloak
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 mx-4"
                        @click.outside="showDetailModal = false">

                        <div class="flex items-center justify-between mb-5">
                            <h3 class="text-lg font-semibold text-gray-700">
                                <i class="fas fa-eye text-blue-500 mr-2"></i>Detail Karyawan
                            </h3>
                            <button @click="showDetailModal = false"
                                class="text-gray-400 hover:text-gray-600 transition">
                                <i class="fas fa-xmark text-lg"></i>
                            </button>
                        </div>

                        <div class="space-y-3 text-sm text-gray-600">
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-medium text-gray-500">NIM</span>
                                <span x-text="selectedKaryawan.nim" class="text-gray-800 font-semibold"></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-medium text-gray-500">Nama Lengkap</span>
                                <span x-text="selectedKaryawan.nama_lengkap" class="text-gray-800"></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-medium text-gray-500">Email</span>
                                <span x-text="selectedKaryawan.email" class="text-gray-800"></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-medium text-gray-500">Nomor Telepon</span>
                                <span x-text="selectedKaryawan.nomor_telepon" class="text-gray-800"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-500">Alamat</span>
                                <span x-text="selectedKaryawan.alamat" class="text-gray-800 text-right max-w-xs"></span>
                            </div>
                        </div>

                        <div class="mt-5 flex justify-end">
                            <button @click="showDetailModal = false"
                                class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-lg transition">
                                Tutup
                            </button>
                        </div>

                    </div>
                </div>

                {{-- MODAL EDIT (Update) --}}
                <div x-show="showEditModal" x-cloak
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                    <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg p-6 mx-4"
                        @click.outside="showEditModal = false">

                        <div class="flex items-center justify-between mb-5">
                            <h3 class="text-lg font-semibold text-gray-700">
                                <i class="fas fa-pen text-blue-500 mr-2"></i>Edit Karyawan
                            </h3>
                            <button @click="showEditModal = false" class="text-gray-400 hover:text-gray-600 transition">
                                <i class="fas fa-xmark text-lg"></i>
                            </button>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">NIM</label>
                                <input type="text" x-model="selectedKaryawan.nim"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Nama Lengkap</label>
                                <input type="text" x-model="selectedKaryawan.nama_lengkap"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                                <input type="email" x-model="selectedKaryawan.email"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Nomor Telepon</label>
                                <input type="text" x-model="selectedKaryawan.nomor_telepon"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Alamat</label>
                                <textarea rows="3" x-model="selectedKaryawan.alamat"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                            </div>

                            <div class="flex justify-end gap-2 pt-2">
                                <button type="button" @click="showEditModal = false"
                                    class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-lg transition">
                                    Batal
                                </button>
                                <button type="button" @click="showEditModal = false"
                                    class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- MODAL DELETE --}}
                <div x-show="showDeleteModal" x-cloak
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
                    <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm p-6 mx-4"
                        @click.outside="showDeleteModal = false">

                        <div class="text-center mb-5">
                            <div
                                class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-trash text-red-500 text-xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-700">Hapus Karyawan?</h3>
                            <p class="text-sm text-gray-500 mt-1">
                                Data <span class="font-medium text-gray-700"
                                    x-text="selectedKaryawan.nama_lengkap"></span>
                                akan dihapus permanen dan tidak bisa dikembalikan.
                            </p>
                        </div>

                        <div class="flex gap-2">
                            <button type="button" @click="showDeleteModal = false"
                                class="flex-1 px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-lg transition">
                                Batal
                            </button>
                            <button type="button"
                                @click="karyawans = karyawans.filter(k => k.id !== selectedKaryawan.id); showDeleteModal = false"
                                class="flex-1 px-4 py-2 text-sm bg-red-500 hover:bg-red-600 text-white rounded-lg transition">
                                <i class="fas fa-trash mr-1"></i> Hapus
                            </button>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>