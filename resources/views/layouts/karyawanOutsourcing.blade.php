<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Leaflet Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

    </style>
</head>

<body x-data="{ open: false }" class="bg-black/5">
    <div class="flex min-h-screen">
        <!--  SIDEBAR -->
        <x-sidebar :menus="[
            ['title' => 'Absensi', 'icon' => 'fas fa-home', 'ref' => '/karyawanOutsourcing/dashboard'],
            ['title' => 'Jadwalku', 'icon' => 'fas fa-users', 'ref' => '/karyawanOutsourcing/jadwal-karyawan'],
            [
                'title' => 'Pengajuan Lembur',
                'icon' => 'fas fa-users',
                'ref' => '/karyawanOutsourcing/pengajuanKaryawan',
            ],
            ['title' => 'Perizinan Sakit', 'icon' => 'fas fa-cog', 'ref' => '/karyawanOutsourcing/perizinan-karyawan'],
        ]">Karyawan Outsourcing</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Karyawan Outsourcing{{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <x-alert></x-alert>


            <!-- CONTENT -->
        </div>
    </div>
</body>

</html>
