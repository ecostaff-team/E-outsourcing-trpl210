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
            ['title' => 'Penjadwalan', 'icon' => 'fas fa-home', 'ref' => '/kepala-departemen/dashboard'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/karyawan'],
            ['title' => 'Pengajuan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/pengajuan'],
            ['title' => 'Laporan', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/laporan'],
            ['title' => 'Shift', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/shift'],
            ['title' => 'Pengaturan', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/pengaturan'],
        ]">kepala-departemen</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen</x-header>

        </div>
    </div>

</body>

</html>
