<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Outsourcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-slate-100 font-sans text-slate-800 antialiased">
    <div class="flex">

        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-home', 'ref' => '/admin-outsourcing/dashboard'],
            ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-users', 'ref' => '/admin-outsourcing/pengajuan-karyawan'],
            ['title' => 'Kelola Karyawan', 'icon' => 'fas fa-user-cog', 'ref' => '/admin-outsourcing/kelola-karyawan'],
        ]">Admin Outsourcing</x-sidebar>

        <div class="flex-1 p-6 min-w-0 flex flex-col overflow-hidden">
            <!-- HEADER -->
            <x-header>Admin Outsourcing</x-header>
            <!-- CONTENT -->


        </div><!-- /main -->
    </div><!-- /app -->
</body>

</html>
