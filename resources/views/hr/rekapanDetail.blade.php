<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapan Detail Karyawan</title>

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
        ]" />
        <div class="flex-1 p-6 ml-0 min-w-0">

            <!-- HEADER CONTENT -->
            <x-header>HR</x-header>
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 mt-6">
                <x-hr.hr-rekapan-detail-card title="Total Hadir" value="78" subtext="80% hadir" icon="fas fa-user-check"
                    borderColor="hover:border-green-200" textColor="text-green-600" iconBg="bg-green-100"
                    iconColor="text-green-600" />

                <x-hr.hr-rekapan-detail-card title="Total Alpha" value="10" subtext="10 hari" icon="fas fa-user-times"
                    borderColor="hover:border-red-200" textColor="text-red-600" iconBg="bg-red-100"
                    iconColor="text-red-600" />

                <x-hr.hr-rekapan-detail-card title="Sakit / Izin" value="10" subtext="10 hari" icon="fas fa-file-medical"
                    borderColor="hover:border-yellow-200" textColor="text-yellow-500" iconBg="bg-yellow-100"
                    iconColor="text-yellow-600" />

                <x-hr.hr-rekapan-detail-card title="Jml Karyawan" value="5" subtext="Karyawan Aktif" icon="fas fa-users"
                    borderColor="hover:border-indigo-200" textColor="text-indigo-600" iconBg="bg-indigo-100"
                    iconColor="text-indigo-600" />
            </div>

            <x-hr.filter-rekapan></x-hr.filter-rekapan>

            <x-hr.tabel-rekapan></x-hr.tabel-rekapan>


            {{-- SELESAI CONTENT --}}
        </div>
    </div>

</body>

</html>
