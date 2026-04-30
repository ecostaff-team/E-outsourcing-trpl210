<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- title untuk judul halaman --}}
    <title>Admin Outsourcing</title>

    {{-- link favicon untuk logo --}}
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    {{-- mengambil css dan js styling tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- kode CDN untuk alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- kode CDN untuk font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- kode CDN untuk leaflet map --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    {{-- kode CDN untuk leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    {{-- kode CDN untuk chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>

    {{-- kode CDN untuk flatpickr --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    {{-- kode CDN untuk chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body x-data="{ open: false }" class="bg-slate-100 font-sans text-slate-800 antialiased">
    <div class="flex">
        {{ $slot }}

        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>

        <div class="flex-1 p-4 md:p-6 overflow-x-hidden">
            <!-- HEADER -->
            <x-header>Admin Outsourcing</x-header>
            <x-alert></x-alert>
            <!-- CONTENT -->


        </div><!-- /main -->
    </div><!-- /app -->
</body>

</html>
