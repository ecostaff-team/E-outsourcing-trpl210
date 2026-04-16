<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard HR</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex">
        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-home'],
            ['title' => 'User', 'icon' => 'fas fa-users'],
            ['title' => 'karyawan', 'icon' => 'fas fa-cog'],
        ]" />
        <div class="flex-1 p-6 ml-0">

            <!-- HEADER CONTENT -->
            @include('components.header_admin_out')
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 mt-6">
                <x-hr.hr-stat-card title="Karyawan OS Aktif" value="5" subtext="dari 87 terdaftar" icon="fas fa-users"
                    borderColor="border-green-500" textColor="text-green-500"></x-hr.hr-stat-card>
                <x-hr.hr-stat-card title="Total Menit Lembur" value="870" subtext="Bulan Maret 2025" icon="fas fa-clock"
                    borderColor="border-orange-400" textColor="text-orange-500"></x-hr.hr-stat-card>
                <x-hr.hr-stat-card title="Ajuan Rekap Pending" value="2" subtext="Menunggu persetujuan"
                    icon="fas fa-clipboard-list" borderColor="border-indigo-500"
                    textColor="text-indigo-600"></x-hr.hr-stat-card>
            </div>


            <div class="bg-white p-8 rounded-lg shadow-lg mt-6">
                <div class="flex flex-col md:flex-row md:justify-between gap-3 mb-4">
                    <div class="flex flex-col sm:flex-row gap-2">
                        <div class="relative w-64">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="far fa-calendar text-gray-500"></i>
                            </div>

                            <select
                                class="w-full border rounded-lg pl-9 pr-3 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-green-500 outline-none appearance-none bg-white cursor-pointer shadow-sm">
                                <option>Pilih Rentang Tanggal</option>
                                <option>Minggu ini</option>
                                <option>5 Apr 2026 - 12 Apr 2026</option>
                                <option>29 Mar 2026 - 4 Apr 2026</option>
                            </select>

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </div>

                        </div>
                    </div>
                    <button
                        class="bg-green-600 shadow-lg text-white px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                        <i class="fas fa-file-excel"></i>
                        Export Excel
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <x-hr.tabel-lembur-karyawan></x-hr.tabel-lembur-karyawan>
                </div>

                <div class="flex justify-end mt-4 gap-1 text-sm">
                    <button class="px-3 py-1 border rounded">Previous</button>
                    <button class="px-3 py-1 bg-green-600 text-white rounded">1</button>
                    <button class="px-3 py-1 border rounded">2</button>
                    <button class="px-3 py-1 border rounded">3</button>
                    <button class="px-3 py-1 border rounded">Next</button>
                </div>
            </div>


            {{-- SELESAI CONTENT --}}
        </div>

    </div>

</body>

</html>
