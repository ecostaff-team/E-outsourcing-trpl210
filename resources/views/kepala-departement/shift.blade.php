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
            ['title' => 'Penjadwalan', 'icon' => 'fa-solid fa-calendar', 'ref' => '/kepala-departement/dashboard'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departement/karyawan'],
            ['title' => 'Pengajuan', 'icon' => 'fa-solid fa-file-arrow-up', 'ref' => '/kepala-departement/pengajuan'],
            ['title' => 'Laporan', 'icon' => 'fa-solid fa-file-lines', 'ref' => '/kepala-departement/laporan'],
            ['title' => 'Shift', 'icon' => 'fa-solid fa-user-clock', 'ref' => '/kepala-departement/shift'],
        ]">kepala-departement</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen {{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <div class="max-w-6xl mx-auto p-6">

                <!-- TITLE -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Manajemen Shift</h2>
                    <p class="text-sm text-gray-500">Pengaturan jadwal kerja karyawan</p>
                </div>

                <!-- CARD CONTAINER -->
                <div class="grid md:grid-cols-3 gap-6">

                    <!-- PAGI -->
                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 p-5">

                        <!-- HEADER -->
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-emerald-600">🌄 Shift Pagi</h3>
                            <span class="text-xs px-2 py-1 rounded-full bg-emerald-50 text-emerald-600">
                                5 hari/minggu
                            </span>
                        </div>

                        <!-- CONTENT -->
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex justify-between">
                                <span>Jam Kerja</span>
                                <span class="font-medium text-gray-800">06:00 - 14:00</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Istirahat</span>
                                <span class="font-medium text-gray-800">60 menit</span>
                            </div>
                        </div>

                        <!-- FOOTER -->
                        <div class="flex justify-end gap-2 mt-5">
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                Edit
                            </button>
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-red-50 hover:bg-red-100 text-red-500 transition">
                                Hapus
                            </button>
                        </div>

                    </div>

                    <!-- SIANG -->
                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 p-5">

                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-yellow-600">☀️ Shift Siang</h3>
                            <span class="text-xs px-2 py-1 rounded-full bg-yellow-50 text-yellow-600">
                                5 hari/minggu
                            </span>
                        </div>

                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex justify-between">
                                <span>Jam Kerja</span>
                                <span class="font-medium text-gray-800">14:00 - 22:00</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Istirahat</span>
                                <span class="font-medium text-gray-800">60 menit</span>
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 mt-5">
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                Edit
                            </button>
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-red-50 hover:bg-red-100 text-red-500 transition">
                                Hapus
                            </button>
                        </div>

                    </div>

                    <!-- MALAM -->
                    <div
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 p-5">

                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-indigo-600">🌙 Shift Malam</h3>
                            <span class="text-xs px-2 py-1 rounded-full bg-indigo-50 text-indigo-600">
                                4 hari/minggu
                            </span>
                        </div>

                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex justify-between">
                                <span>Jam Kerja</span>
                                <span class="font-medium text-gray-800">22:00 - 06:00</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Istirahat</span>
                                <span class="font-medium text-gray-800">45 menit</span>
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 mt-5">
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                Edit
                            </button>
                            <button
                                class="px-3 py-1.5 text-xs rounded-lg bg-red-50 hover:bg-red-100 text-red-500 transition">
                                Hapus
                            </button>
                        </div>

                    </div>

                </div>
            </div>

            <div class="max-w-3xl mx-auto p-6">

                <!-- CARD -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

                    <!-- TITLE -->
                    <h2 class="text-lg font-semibold text-gray-800 mb-6">
                        Pengaturan Umum
                    </h2>

                    <!-- GRID -->
                    <div class="grid md:grid-cols-2 gap-5">

                        <!-- WAKTU ISTIRAHAT -->
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">
                                Waktu Istirahat Default
                            </label>
                            <select
                                class="mt-2 w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200
                               focus:ring-2 focus:ring-blue-400 focus:bg-white outline-none text-sm">
                                <option>60 menit</option>
                                <option>45 menit</option>
                                <option>30 menit</option>
                            </select>
                        </div>

                        <!-- JEDA SHIFT -->
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">
                                Minimum Jeda Antar Shift
                            </label>
                            <select
                                class="mt-2 w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200
                               focus:ring-2 focus:ring-blue-400 focus:bg-white outline-none text-sm">
                                <option>10 jam</option>
                                <option>8 jam</option>
                            </select>
                        </div>

                        <!-- OVERTIME -->
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">
                                Batas Overtime per Minggu
                            </label>
                            <select
                                class="mt-2 w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200
                               focus:ring-2 focus:ring-blue-400 focus:bg-white outline-none text-sm">
                                <option>40 jam</option>
                                <option>30 jam</option>
                            </select>
                        </div>

                        <!-- HARI KERJA -->
                        <div>
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">
                                Hari Kerja Seminggu
                            </label>
                            <select
                                class="mt-2 w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200
                               focus:ring-2 focus:ring-blue-400 focus:bg-white outline-none text-sm">
                                <option>6 hari (Sen–Sab)</option>
                                <option>5 hari (Sen–Jum)</option>
                            </select>
                        </div>

                    </div>

                    <!-- TOGGLE SECTION -->
                    <div class="mt-6 space-y-5">

                        <!-- NOTIF -->
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-700">
                                    Notifikasi Otomatis ke Karyawan
                                </p>
                                <p class="text-xs text-gray-500">
                                    Kirim notifikasi saat jadwal dibuat atau diperbarui
                                </p>
                            </div>

                            <!-- TOGGLE -->
                            <button class="w-11 h-6 bg-blue-500 rounded-full relative">
                                <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></span>
                            </button>
                        </div>

                        <!-- LIBUR -->
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-700">
                                    Hari Libur Nasional Otomatis
                                </p>
                                <p class="text-xs text-gray-500">
                                    Tandai hari libur nasional Indonesia sebagai OFF
                                </p>
                            </div>

                            <button class="w-11 h-6 bg-blue-500 rounded-full relative">
                                <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></span>
                            </button>
                        </div>

                    </div>

                    <!-- ACTION -->
                    <div class="flex justify-end gap-3 mt-8">

                        <button
                            class="px-5 py-2 rounded-xl border border-gray-200 text-gray-600
                           hover:bg-gray-100 text-sm transition">
                            Reset
                        </button>

                        <button
                            class="px-5 py-2 rounded-xl bg-blue-600 text-white text-sm font-medium
                           hover:bg-blue-700 shadow-sm hover:shadow-md
                           active:scale-95 transition">
                            Simpan Pengaturan
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>
