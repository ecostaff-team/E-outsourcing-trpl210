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
            ['title' => 'Penjadwalan', 'icon' => 'fas fa-home', 'ref' => '/kepala-departemen'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/karyawan'],
            ['title' => 'Shift Karyawan', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/shift'],
            ['title' => 'Pengaturan', 'icon' => 'fas fa-cog', 'ref' => '#'],
        ]">kepala-departemen</x-sidebar>
        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen {{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <div class="max-w-7xl mx-auto p-6 bg-white/60 mt-2 rounded-2xl">

                <!-- HEADER -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

                    <!-- Title -->
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Daftar Karyawan</h1>
                        <p class="text-sm text-gray-500">Kelola data dan performa karyawan</p>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-wrap gap-3 w-full md:w-auto">

                        <!-- Search -->
                        <div class="relative w-full md:w-80 group">
                            <input type="text" placeholder="Cari karyawan..."
                                class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-gray-100
                                    focus:bg-white focus:ring-2 focus:ring-blue-400
                                    outline-none text-sm transition-all duration-200">

                            <i
                                class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2
                                    text-gray-400 group-focus-within:text-blue-500 transition"></i>
                        </div>

                        <!-- Filter -->
                        <select
                            class="px-4 py-2.5 rounded-xl bg-gray-100 text-sm
                                focus:ring-2 focus:ring-blue-400 outline-none">
                            <option>Semua Departemen</option>
                        </select>

                    </div>
                </div>

                <!-- TABLE CARD -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">

                    <!-- HEADER -->
                    <div
                        class="grid grid-cols-6 text-xs font-semibold text-gray-500
                    bg-gray-50 px-6 py-4 uppercase tracking-wide">
                        <div>Nama</div>
                        <div>Departemen</div>
                        <div>Shift</div>
                        <div>Status</div>
                        <div>Jam</div>
                        <div class="text-center">Aksi</div>
                    </div>

                    <!-- ROW -->
                    <div
                        class="grid grid-cols-6 items-center px-6 py-4 border-t
                    hover:bg-gray-50 transition group">

                        <!-- Nama -->
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500
                            text-white flex items-center justify-center font-semibold shadow-sm">
                                RW
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                    Rina Wijaya
                                </div>
                                <div class="text-xs text-gray-400">EMP-001</div>
                            </div>
                        </div>

                        <!-- Departemen -->
                        <div class="text-sm text-gray-600">IT</div>

                        <!-- Shift -->
                        <div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium
                             bg-emerald-100 text-emerald-700">
                                🌄 Pagi
                            </span>
                        </div>

                        <!-- Status -->
                        <div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium
                             bg-green-100 text-green-700">
                                Aktif
                            </span>
                        </div>

                        <!-- Jam -->
                        <div class="font-semibold text-gray-800">40h</div>

                        <!-- Aksi -->
                        <div class="flex justify-center gap-2">

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-orange-100
                           text-gray-500 hover:text-orange-500
                           transition-all duration-200">
                                <i class="fas fa-pen text-xs"></i>
                            </button>

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-blue-100
                           text-gray-500 hover:text-blue-500
                           transition-all duration-200">
                                <i class="fas fa-calendar text-xs"></i>
                            </button>

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-red-100
                           text-gray-500 hover:text-red-500
                           transition-all duration-200">
                                <i class="fas fa-trash text-xs"></i>
                            </button>

                        </div>
                    </div>

                    <!-- ROW 2 -->
                    <div
                        class="grid grid-cols-6 items-center px-6 py-4 border-t
                    hover:bg-gray-50 transition group">

                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400 to-cyan-500
                            text-white flex items-center justify-center font-semibold shadow-sm">
                                BS
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                    Budi Santoso
                                </div>
                                <div class="text-xs text-gray-400">EMP-002</div>
                            </div>
                        </div>

                        <div class="text-sm text-gray-600">IT</div>

                        <div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium
                             bg-yellow-100 text-yellow-700">
                                ☀️ Siang
                            </span>
                        </div>

                        <div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium
                             bg-green-100 text-green-700">
                                Aktif
                            </span>
                        </div>

                        <div class="font-semibold text-gray-800">38h</div>

                        <div class="flex justify-center gap-2">

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-orange-100 text-gray-500 hover:text-orange-500">
                                <i class="fas fa-pen text-xs"></i>
                            </button>

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-blue-100 text-gray-500 hover:text-blue-500">
                                <i class="fas fa-calendar text-xs"></i>
                            </button>

                            <button
                                class="p-2 rounded-lg bg-gray-100 hover:bg-red-100 text-gray-500 hover:text-red-500">
                                <i class="fas fa-trash text-xs"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>
