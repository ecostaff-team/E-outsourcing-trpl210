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
            ['title' => 'Dashboard', 'icon' => 'fas fa-book', 'ref' => '/hr/dashboard'],

            ['title' => 'Rekapan Detail', 'icon' => 'fas fa-user-group','ref' => '/hr/rekapan-detail'],
            ['title' => 'Ajuan Data Karyawan', 'icon' => 'fas fa-address-book','ref' => '/hr/ajuan-data-karyawan'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-user-tie','ref' => '/hr/data-karyawan'],
        ]" >HR</x-sidebar>
        <div class="flex-1 p-4 md:p-6 ml-0 min-w-0 overflow-hidden">

            <!-- HEADER CONTENT -->
            <x-header>HR</x-header>
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-6 mb-6 mt-6">
                <x-stat-card title="Total Karyawan Outsourcing Aktif" value="18" subtext="dari 24 terdaftar"
                    icon="fas fa-users" borderColor="border-green-500" textColor="text-green-500"></x-stat-card>
                <x-stat-card title="Total Lembur Pending" value="2" subtext="Menunggu Persetujuan"
                    icon="fas fa-clock" borderColor="border-orange-400" textColor="text-orange-500"></x-stat-card>
                <x-stat-card title="Ajuan Rekap Pending" value="2" subtext="Menunggu persetujuan"
                    icon="fas fa-clipboard-list" borderColor="border-indigo-500"
                    textColor="text-indigo-600"></x-stat-card>
                <x-stat-card title="Ajuan Karyawan Pending" value="7" subtext="Menunggu persetujuan"
                    icon="fas fa-user-clock" borderColor="border-teal-500" textColor="text-teal-600">
                </x-stat-card>
            </div>


            <div class="bg-white p-4 md:p-8 rounded-lg shadow-lg mt-6">
                <div class="flex flex-col md:flex-row md:justify-between gap-4 sm:gap-3 mb-4">
                    <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
                        <div class="relative w-full sm:w-auto">
                            <input type="date" id="start_date" name="start_date"
                                class="w-full sm:w-40 border rounded-lg px-3 py-2 text-sm text-gray-700 transition-all focus:ring-2 focus:ring-green-500 outline-none bg-white shadow-sm cursor-pointer"
                                title="Tanggal Mulai">
                        </div>

                        <span class="text-gray-500 text-sm font-medium hidden sm:block">ke</span>
                        <span class="text-gray-500 text-sm font-medium sm:hidden">sampai dengan</span>

                        <div class="relative w-full sm:w-auto">
                            <input type="date" id="end_date" name="end_date"
                                class="w-full sm:w-40 border rounded-lg px-3 py-2 text-sm text-gray-700 transition-all focus:ring-2 focus:ring-green-500 outline-none bg-white shadow-sm cursor-pointer"
                                title="Tanggal Akhir">
                        </div>
                    </div>
                    <button
                        class="bg-green-600 shadow-lg text-white hover:text-green-700 px-4 py-2 rounded-lg text-sm flex items-center gap-2 cursor-pointer transition-colors duration-200 hover:bg-white border-transparent border hover:border-green-600">
                        <i class="fas fa-file-excel"></i>
                        Export Excel
                    </button>
                </div>

                <div class="w-full overflow-x-auto">
                    <x-hr.tabel-lembur-karyawan></x-hr.tabel-lembur-karyawan>
                </div>

                <x-hr.pagination></x-hr.pagination>
            </div>


            {{-- SELESAI CONTENT --}}
        </div>

    </div>

</body>

</html>
