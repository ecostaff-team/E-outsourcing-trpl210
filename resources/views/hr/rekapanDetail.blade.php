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
            ['title' => 'Dashboard', 'icon' => 'fas fa-book'],
            ['title' => 'Rekapan Detail', 'icon' => 'fas fa-user-group'],
            ['title' => 'Ajuan Data Karyawan', 'icon' => 'fas fa-address-book'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-user-tie'],
        ]" />
        <div class="flex-1 p-6 ml-0 min-w-0">

            <!-- HEADER CONTENT -->
            <x-header>HR</x-header>
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 mt-6">
                <x-hr.hr-rekapan-card title="Total Hadir" value="78" subtext="80% hadir" icon="fas fa-user-check"
                    border-color="hover:border-green-200" text-color="text-green-600" icon-bg="bg-green-100"
                    icon-color="text-green-600" />

                <x-hr.hr-rekapan-card title="Total Alpha" value="10" subtext="10 hari" icon="fas fa-user-times"
                    border-color="hover:border-red-200" text-color="text-red-600" icon-bg="bg-red-100"
                    icon-color="text-red-600" />

                <x-hr.hr-rekapan-card title="Sakit / Izin" value="10" subtext="10 hari" icon="fas fa-file-medical"
                    border-color="hover:border-yellow-200" text-color="text-yellow-500" icon-bg="bg-yellow-100"
                    icon-color="text-yellow-600" />

                <x-hr.hr-rekapan-card title="Jml Karyawan" value="5" subtext="Karyawan Aktif" icon="fas fa-users"
                    border-color="hover:border-indigo-200" text-color="text-indigo-600" icon-bg="bg-indigo-100"
                    icon-color="text-indigo-600" />
            </div>

            <x-hr.filter-rekapan></x-hr.filter-rekapan>

            <x-hr.tabel-rekapan></x-hr.tabel-rekapan>


            {{-- SELESAI CONTENT --}}
        </div>
    </div>

</body>

</html>
