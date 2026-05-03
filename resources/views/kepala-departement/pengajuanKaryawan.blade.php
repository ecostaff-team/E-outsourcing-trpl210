<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex">
        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Penjadwalan', 'icon' => 'fa-solid fa-calendar', 'ref' => '/kepala-departement/dashboard'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departement/karyawan'],
            ['title' => 'Pengajuan', 'icon' => 'fa-solid fa-file-arrow-up', 'ref' => '/kepala-departement/pengajuan'],
            ['title' => 'Laporan', 'icon' => 'fa-solid fa-file-lines', 'ref' => '/kepala-departement/laporan'],
            ['title' => 'Shift', 'icon' => 'fa-solid fa-user-clock', 'ref' => '/kepala-departement/shift'],
        ]">kepala-departement</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen</x-header>

            <div class="max-w-6xl mx-auto p-6 bg-white/70 rounded-2xl shadow" x-data="lemburApp()">

                <!-- Title -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Persetujuan Lembur</h2>
                    <p class="text-gray-500 text-sm">Klik salah satu data untuk melihat detail dan memberikan keputusan.
                    </p>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-2xl shadow overflow-hidden">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50 text-gray-600">
                            <tr>
                                <th class="p-3 text-left">Nama</th>
                                <th class="p-3 text-left">Tanggal</th>
                                <th class="p-3 text-left">Jam</th>
                                <th class="p-3 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="item in lembur" :key="item.id">
                                <tr @click="select(item)" class="cursor-pointer hover:bg-green-50 transition">
                                    <td class="p-3" x-text="item.nama"></td>
                                    <td class="p-3" x-text="item.tanggal"></td>
                                    <td class="p-3" x-text="item.jam"></td>
                                    <td class="p-3">
                                        <span
                                            :class="{
                                                'text-yellow-600': item.status==='Pending',
                                                'text-green-600': item.status==='Disetujui',
                                                'text-red-600': item.status==='Ditolak'
                                            }"
                                            x-text="item.status"></span>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>

                <!-- Modal Detail -->
                <div x-show="selected" x-transition class="fixed inset-0 bg-black/40 flex items-center justify-center">
                    <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg p-6">

                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Detail Lembur</h3>
                            <button @click="selected=null" class="text-gray-500 hover:text-red-500">✕</button>
                        </div>

                        <div class="space-y-2 text-sm text-gray-600">
                            <p><strong>Nama:</strong> <span x-text="selected.nama"></span></p>
                            <p><strong>Tanggal:</strong> <span x-text="selected.tanggal"></span></p>
                            <p><strong>Jam:</strong> <span x-text="selected.jam"></span></p>
                            <p><strong>Deskripsi:</strong></p>
                            <p class="bg-gray-100 p-3 rounded-lg" x-text="selected.deskripsi"></p>
                        </div>

                        <!-- Action -->
                        <div class="flex justify-end gap-3 mt-6">
                            <button @click="approve()"
                                class="px-4 py-2 bg-green-500 text-white rounded-xl hover:bg-green-600">
                                Terima</button>
                            <button @click="reject()"
                                class="px-4 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600"> Tolak</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function lemburApp() {
            return {
                selected: null,
                lembur: [{
                        id: 1,
                        nama: 'Budi',
                        tanggal: '2026-04-25',
                        jam: '18:00 - 21:00',
                        status: 'Pending',
                        deskripsi: 'Menyelesaikan laporan bulanan proyek A'
                    },
                    {
                        id: 2,
                        nama: 'Siti',
                        tanggal: '2026-04-26',
                        jam: '19:00 - 22:00',
                        status: 'Pending',
                        deskripsi: 'Maintenance sistem dan backup database'
                    },
                ],
                select(item) {
                    this.selected = item
                },
                approve() {
                    this.selected.status = 'Disetujui'
                    this.selected = null
                },
                reject() {
                    this.selected.status = 'Ditolak'
                    this.selected = null
                }
            }
        }
    </script>

</body>

</html>
