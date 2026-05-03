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

<body x-data="{ open: false }" class="bg-gray-100">
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
            <div class="flex-1 p-4 md:p-6 max-w-7xl mx-auto">




                <div class="bg-white rounded-2xl shadow-sm p-5 mb-6 border border-gray-100">

                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-9 h-9 bg-blue-100 text-blue-600 flex items-center justify-center rounded-lg">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <h2 class="font-semibold text-gray-800">Jadwal Hari Ini</h2>
                    </div>

                    <div
                        class="p-4 border border-gray-100 rounded-xl cursor-pointer hover:shadow-md hover:-translate-y-0.5 transition">
                        <h3 class="font-semibold text-gray-800">Shift Pagi</h3>
                        <p class="text-sm text-gray-500">08:00 - 17:00</p>
                    </div>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                    <!-- MASUK -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-2">
                            <div>
                                <p class="text-xs text-gray-500">Absen Masuk</p>
                                <p id="tanggalMasuk" class="font-semibold text-gray-800 text-sm"></p>
                            </div>
                            <div
                                class="w-10 h-10 bg-emerald-100 text-emerald-600 flex items-center justify-center rounded-xl">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                        </div>

                        <p id="statusMasuk" class="text-sm text-gray-400">
                            Belum absen masuk hari ini
                        </p>
                    </div>

                    <!-- KELUAR -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-2">
                            <div>
                                <p class="text-xs text-gray-500">Absen Keluar</p>
                                <p id="tanggalKeluar" class="font-semibold text-gray-800 text-sm"></p>
                            </div>
                            <div class="w-10 h-10 bg-red-100 text-red-600 flex items-center justify-center rounded-xl">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                        </div>

                        <p id="statusKeluar" class="text-sm text-gray-400">
                            Belum absen keluar hari ini
                        </p>
                    </div>

                </div>


                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">

                    <h2 class="font-semibold text-gray-800">Form Absensi</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
                        <button id="btnMasuk" onclick="absenMasuk()" class="flex-1 bg-emerald-600 text-white py-2 rounded-lg">Absen Masuk</button>
                        <button id="btnKeluar" onclick="absenKeluar()" class="flex-1 bg-gray-100 py-2 rounded-lg">Absen Keluar</button>
                        
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-gray-600">Waktu</label>
                        <input id="waktu" type="text" class="w-full border rounded-xl p-3 mt-1" readonly>
                    </div>

                    <div>
                        <label class="text-sm font-semibold text-gray-600">Lokasi GPS</label>
                        <div id="map" class="w-full h-52 rounded-xl mt-1"></div>
                    </div>

                    <button onclick="simpanAbsensi()"
                        class="w-full bg-emerald-600 text-white py-3 rounded-xl font-semibold">
                        Simpan Absensi
                    </button>

                </div>

                <!-- GRAFIK -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 mt-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="font-semibold text-gray-800">Rekap Kehadiran</h2>
                        <select class="border rounded-lg px-3 py-1 text-sm">
                            <option>2026</option>
                            <option>2025</option>
                        </select>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <div class="min-w-[500px] h-[250px]">
                            <canvas id="grafikAbsensi"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <script src="{{ asset('js/karyawan_js/dashboard.js') }}"></script>
</body>

</html>
