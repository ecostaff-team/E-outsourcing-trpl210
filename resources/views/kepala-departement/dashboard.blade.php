<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href={{ asset('css/alert.css') }}>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="dashboard()" x-data="{ open: false }" class="bg-gray-100">

    <div class="flex">
        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Penjadwalan', 'icon' => 'fas fa-home', 'ref' => '/kepala-departemen'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/karyawan'],
            ['title' => 'Laporan', 'icon' => 'fas fa-cog', 'ref' => '#'],
            ['title' => 'Pengaturan', 'icon' => 'fas fa-cog', 'ref' => '#'],
        ]">kepala-departemen</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen {{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <x-alert></x-alert>

            {{-- NONTIFIKASI, CETAK SEBAGAI EXCEL, MODAL MENAMBAHKAN JADWAL --}}
            <div class='flex justify-between border-b pb-4'>
                <div class="flex justify-center items-center py-2">
                    <h1 class="text-xl font-bold text-emerald-700 md:text-md inline-block font-semibold">Penjadwalan
                        Mingguan Karyawan</h1>
                </div>
                <div class='flex gap-2'>
                    <button
                        class="px-5 py-2.5 bg-emerald-400 hover:bg-primary-700 text-white/90 font-medium rounded-xl shadow-md hover:shadow-lg hover:bg-emerald-500 hover:text-white active:scale-95 transition-all duration-200 ease-in-out">
                        <p class="text-bold text-md">notif</p>
                    </button>
                    <button
                        class="px-5 py-2.5 bg-emerald-400 hover:bg-primary-700 text-white/90 font-medium rounded-xl shadow-md hover:shadow-lg hover:bg-emerald-500 hover:text-white active:scale-95 transition-all duration-200 ease-in-out">
                        <p class="text-bold text-md">cetak</p>
                    </button>
                    <button
                        class="px-5 py-2.5 bg-emerald-400 hover:bg-primary-700 text-white/90 font-medium rounded-xl shadow-md hover:shadow-lg hover:bg-emerald-500 hover:text-white active:scale-95 transition-all duration-200 ease-in-out">
                        <p class="text-bold text-md">menambahkan jadwal</p>
                </div>
            </div>

            <!-- CARD -->
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-4">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-lg transition">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Karyawan</h3>
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded-md">
                            Active
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Total karyawan aktif dalam sistem.
                    </p>
                    <div class="flex items-end justify-between items-center">
                        <div class="mt-4 text-2xl font-bold text-gray-800">128</div>
                        <div class="mt-4 ml-2 flex flex-col justify-end items-end">
                            <span class="text-sm text-gray-600">terakhir update hari ini</span>
                            <button
                                class="text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer active:scale-95 transition-all duration-200 ease-in-out text-right">detail</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-lg transition">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Absensi Hari Ini</h3>
                        <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-md">
                            Today
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Jumlah kehadiran karyawan hari ini.
                    </p>
                    <div class="flex items-end justify-between items-center">
                        <div class="mt-4 text-2xl font-bold text-gray-800">97</div>
                        <div class="mt-4 ml-2 flex flex-col justify-end items-end">
                            <span class="text-sm text-gray-600">terakhir update 1 hari </span>
                            <button
                                class="text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer active:scale-95 transition-all duration-200 ease-in-out text-right">detail</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-lg transition">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Terlambat</h3>
                        <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded-md">
                            Warning
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Karyawan yang datang terlambat.
                    </p>
                    <div class="flex items-end justify-between items-center">
                        <div class="mt-4 text-2xl font-bold text-gray-800">12</div>
                        <div class="mt-4 ml-2 flex flex-col justify-end items-end">
                            <span class="text-sm text-gray-600">terakhir update 2 hari </span>
                            <button
                                class="text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer active:scale-95 transition-all duration-200 ease-in-out text-right">detail</button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-lg transition">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Izin / Cuti</h3>
                        <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded-md">
                            Alert
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Jumlah karyawan tidak hadir.
                    </p>
                    <div class="flex items-end justify-between items-center">
                        <div class="mt-4 text-2xl font-bold text-gray-800">19</div>
                        <div class="mt-4 ml-2 flex flex-col justify-end items-end">
                            <span class="text-sm text-gray-600">terakhir update 344 hari </span>
                            <button
                                class="text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer active:scale-95 transition-all duration-200 ease-in-out text-right">detail</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TABEL PENJADWLAN --}}
            <div class="max-w-7xl mx-auto p-4 bg-white rounded-2xl shadow mt-4">

                <div class="flex flex-wrap items-center justify-between gap-3 mb-4">

                    <!-- Header -->
                    <div class="flex items-center gap-2">
                        <template x-for="mode in ['today','week','month']">
                            <button @click="view = mode"
                                :class="view === mode ?
                                    'bg-blue-100 text-blue-600' :
                                    'bg-gray-100 text-gray-600'"
                                class="px-3 py-1 rounded-lg text-sm capitalize transition">
                                <span x-text="mode"></span>
                            </button>
                        </template>
                    </div>

                    <!-- Navigasi tanggal -->
                    <div class="flex items-center gap-3">
                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100">◀</button>

                        <h2 class="font-semibold text-gray-800" x-text="currentWeek"></h2>

                        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100">▶</button>
                    </div>

                    <!-- Filter -->
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-1 rounded-lg bg-gray-100 text-sm">Hari Ini</button>
                        <button class="px-3 py-1 rounded-lg bg-blue-100 text-blue-600 text-sm">Minggu</button>
                        <button class="px-3 py-1 rounded-lg bg-gray-100 text-sm">Bulan</button>

                        <select class="ml-2 px-3 py-1 rounded-lg bg-gray-100 text-sm">
                            <option>Semua Dept</option>
                        </select>
                    </div>

                </div>

                <div>
                    <button
                        class="px-3 py-1.5 text-sm mb-4 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-200">
                        Tambahkan Jadwal
                    </button>
                </div>
                <div class="grid grid-cols-8 border rounded-xl overflow-hidden text-sm overflow-x-auto min-w-[900px]">
                    <!-- Header -->
                    <div class="bg-gray-50 p-3 font-semibold text-gray-600">KARYAWAN</div>

                    <template x-for="d in days">
                        <div class="bg-gray-50 p-3 text-center">
                            <span x-text="d.day"></span><br>
                            <span class="font-semibold" :class="d.active ? 'text-blue-600' : ''" x-text="d.date">
                            </span>
                        </div>
                    </template>

                    <!-- Rows -->
                    <template x-for="emp in employees">
                        <div class="contents">

                            <!-- Karyawan -->
                            <div class="p-3 flex items-center gap-2 border-t hover:bg-gray-50 transition">
                                <div class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs"
                                    x-text="emp.initials"></div>

                                <div>
                                    <div class="font-medium" x-text="emp.name"></div>
                                    <div class="text-xs text-gray-500" x-text="emp.role"></div>
                                </div>
                            </div>

                            <!-- Shift -->
                            <template x-for="shift in emp.shifts">
                                <div class="px-2 py-1 rounded-lg text-xs text-center
                                            hover:shadow-md hover:-translate-y-0.5
                                            transition-all duration-200 cursor-pointer"
                                    :class="shiftClass(shift)">

                                    <!-- Kalau kosong -->
                                    <template x-if="!shift">
                                        <div
                                            class="text-gray-300 text-lg hover:text-blue-500 cursor-pointer transition">
                                            +
                                        </div>
                                    </template>

                                    <!-- Kalau ada shift -->
                                    <template x-if="shift">
                                        <div class="px-2 py-1 rounded-lg text-xs text-center hover:shadow transition"
                                            :class="shiftClass(shift)">

                                            <div class="font-semibold capitalize" x-text="shift"></div>
                                            <div class="text-[10px]">
                                                <template x-if="shift === 'pagi'">06:00 - 14:00</template>
                                                <template x-if="shift === 'siang'">14:00 - 22:00</template>
                                                <template x-if="shift === 'malam'">22:00 - 06:00</template>
                                                <template x-if="shift === 'libur'">Hari Libur</template>
                                            </div>

                                        </div>
                                    </template>

                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    <script>
        function dashboard() {
            return {
                view: 'week',
                currentWeek: '20 – 26 Apr 2026',

                days: [{
                        day: 'Sen',
                        date: 20
                    },
                    {
                        day: 'Sel',
                        date: 21
                    },
                    {
                        day: 'Rab',
                        date: 22,
                        active: true
                    },
                    {
                        day: 'Kam',
                        date: 23
                    },
                    {
                        day: 'Jum',
                        date: 24
                    },
                    {
                        day: 'Sab',
                        date: 25
                    },
                    {
                        day: 'Min',
                        date: 26
                    },
                ],

                employees: [{
                        name: 'Rina',
                        role: 'Senior Dev',
                        initials: 'RW',
                        shifts: ['siang', null, 'pagi', 'malam', 'pagi', 'libur', 'libur']
                    },
                    {
                        name: 'Budi',
                        role: 'Staff IT',
                        initials: 'BS',
                        shifts: ['siang', 'pagi', 'malam', 'pagi', 'siang', 'libur', 'pagi']
                    },
                    {
                        name: 'Andi',
                        role: 'Frontend Dev',
                        initials: 'AP',
                        shifts: ['pagi', 'siang', 'siang', 'malam', 'libur', 'libur', 'pagi']
                    },
                    {
                        name: 'Siti',
                        role: 'Backend Dev',
                        initials: 'SA',
                        shifts: ['malam', 'malam', 'libur', 'pagi', 'siang', 'pagi', 'libur']
                    },
                    {
                        name: 'Dewi',
                        role: 'UI/UX',
                        initials: 'DP',
                        shifts: ['pagi', 'pagi', 'siang', 'siang', 'malam', 'libur', 'libur']
                    },
                    {
                        name: 'Eko',
                        role: 'DevOps',
                        initials: 'ES',
                        shifts: ['malam', 'siang', 'pagi', 'libur', 'siang', 'pagi', 'malam']
                    },
                    {
                        name: 'Fajar',
                        role: 'QA Engineer',
                        initials: 'FN',
                        shifts: ['pagi', 'libur', 'siang', 'malam', 'malam', 'pagi', 'libur']
                    },
                    {
                        name: 'Gina',
                        role: 'HR',
                        initials: 'GH',
                        shifts: ['siang', 'siang', 'libur', 'pagi', 'pagi', 'malam', 'libur']
                    },
                    {
                        name: 'Hendra',
                        role: 'Security',
                        initials: 'HP',
                        shifts: ['malam', 'malam', '', 'siang', 'libur', 'siang', 'pagi']
                    },
                ],

                shiftClass(type) {
                    return {
                        pagi: 'bg-emerald-100 text-emerald-700',
                        siang: 'bg-yellow-100 text-yellow-700',
                        malam: 'bg-indigo-100 text-indigo-700',
                        libur: 'bg-red-100 text-red-600'
                    } [type];
                }


            }
        }
    </script>
</body>
<script src="{{ asset('js/alert.js') }}"></script>

</html>
