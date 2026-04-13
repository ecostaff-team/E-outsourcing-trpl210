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
            ['title' => 'Dashboard', 'icon' => 'fas fa-book'],
            ['title' => 'Rekapan Detail', 'icon' => 'fas fa-user-group'],
            ['title' => 'Ajuan Data Karyawan', 'icon' => 'fas fa-address-book'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-user-tie'],
        ]" />
        <div class="flex-1 p-6 ml-0 min-w-0">

            <!-- HEADER CONTENT -->
            <x-header>HR</x-header>
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}

            <div class="bg-white p-8 rounded-lg shadow-lg mt-6 w-full">
                <div class="flex flex-col md:flex-row md:justify-between gap-3">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fa-solid fa-table text-xl md:text-2xl text-gray-900"></i>
                        <h2 class="text-lg md:text-xl font-bold text-gray-900">Data Karyawan Outsourcing</h2>
                    </div>

                </div>

                <div class="overflow-x-auto">
                    <x-hr.tabel-karyawan></x-hr.tabel-karyawan>
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
