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
        <!-- 🔥 SIDEBAR -->
        <x-sidebar :menus="[
            ['title' => 'Absensi', 'icon' => 'fas fa-home', 'ref' => '/karyawanOutsourcing/dahsboard'],
            ['title' => 'Jadwalku', 'icon' => 'fas fa-users', 'ref' => '/karyawanOutsourcing/jadwal-karyawan'],
            [
                'title' => 'Pengajuan Lembur',
                'icon' => 'fas fa-users',
                'ref' => '/karyawanOutsourcing/pengajuanKaryawan',
            ],
            ['title' => 'Perizinan Sakit', 'icon' => 'fas fa-cog', 'ref' => '#'],
        ]">Karyawan Outsourcing</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Karyawan Outsourcing{{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <x-alert></x-alert>

            <!-- CONTENT -->
            <div class="flex-1 p-4 md:p-6 max-w-7xl mx-auto">




                <div class="bg-white rounded-xl shadow p-6 mb-6 border-l-4 border-blue-500">

                    <h2 class="font-semibold mb-3 flex items-center gap-2">
                        <i class="fa fa-calendar"></i>
                        Jadwal Hari Ini
                    </h2>

                    <div id="jadwalContainer" class="space-y-3">

                        <div class="p-4 border rounded-xl cursor-pointer hover:bg-gray-50"
                            onclick="pilihJadwal('Shift Pagi','08:00','17:00')">

                            <h3 class="font-semibold">
                                Shift Pagi
                            </h3>

                            <p class="text-sm text-gray-500">
                                08:00 - 17:00
                            </p>

                        </div>

                    </div>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                    <div class="bg-white p-4 rounded-xl border-l-4 border-red-500">

                        <p id="tanggalMasuk" class="font-semibold"></p>

                        <p id="statusMasuk" class="text-gray-400 text-sm">
                            Belum absen masuk hari ini
                        </p>

                    </div>


                    <div class="bg-white p-4 rounded-xl border-l-4 border-red-500">

                        <p id="tanggalKeluar" class="font-semibold"></p>

                        <p id="statusKeluar" class="text-gray-400 text-sm">
                            Belum absen keluar hari ini
                        </p>

                    </div>

                </div>


                <div class="bg-white rounded-xl shadow p-6">

                    <h2 class="font-semibold mb-4">
                        Form Absensi
                    </h2>

                    <div class="flex flex-col md:flex-row gap-3 mb-4">

                        <button onclick="absenMasuk()" class="flex-1 bg-emerald-600 text-white py-2 rounded-lg">
                            Absen Masuk
                        </button>

                        <button onclick="absenKeluar()" class="flex-1 bg-gray-100 py-2 rounded-lg">
                            Absen Keluar
                        </button>

                    </div>

                    <div class="mb-4">
                        <label class="text-sm font-semibold">
                            Waktu
                        </label>

                        <input id="waktu" type="text" class="w-full border rounded-lg p-3" readonly>
                    </div>

                    <div class="mb-4">
                        <label class="text-sm font-semibold">
                            Lokasi GPS
                        </label>

                        <div id="map" class="w-full h-48 md:h-56 rounded-lg"></div>
                    </div>

                </div>


                <button onclick="simpanAbsensi()"
                    class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold">
                    Simpan Absensi
                </button>

                <div class="bg-white rounded-xl shadow p-6 mt-6">

                    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-2 mb-4">
                        <h2 class="font-semibold text-sm md:text-base">
                            Rekap Kehadiran Pribadi
                        </h2>

                        <select class="border rounded-lg px-3 py-1 text-sm w-full md:w-auto">
                            <option>2026</option>
                            <option>2025</option>
                        </select>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <div class="min-w-500px md:min-w-full h-250px md:h-300px">
                            <canvas id="grafikAbsensi"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="{{ asset('js/karyawan_js/dashboard.js') }}"></script>
</body>

</html>
