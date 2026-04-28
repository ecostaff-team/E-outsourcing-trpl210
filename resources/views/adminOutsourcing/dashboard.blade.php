<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Outsourcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/admin-outsourcing/dashboard.css') }}">
</head>

<body class="bg-slate-100 font-sans text-slate-800 antialiased">
    <div class="flex">

        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-home', 'ref' => '/admin-outsourcing/dashboard'],
            [
                'title' => 'Pengajuan Karyawan',
                'icon' => 'fas fa-users',
                'ref' => '/admin-outsourcing/pengajuan-karyawan',
            ],
            ['title' => 'Kelola Karyawan', 'icon' => 'fas fa-user-cog', 'ref' => '/admin-outsourcing/kelola-karyawan'],
        ]">Admin Outsourcing</x-sidebar>

        <div class="flex-1 p-6 min-w-0 flex flex-col overflow-hidden">
            <!-- HEADER -->
            <x-header>Admin Outsourcing</x-header>
            <!-- CONTENT -->
            <div class="flex flex-col gap-4 overflow-y-auto">

                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-6 ">
                        <x-stat-card title="Total Karyawan Hadir" value="78" subtext="80% dari total karyawan Hadir"
                            icon="fa-solid fa-user-check" borderColor="border-gray-200"
                            textColor=" text-green-600"></x-stat-card>
                        <x-stat-card title="Total Karyawan Alpha" value="10" subtext="Total 12 Hari"
                            icon="fa-solid fa-user-xmark" borderColor="border-gray-200 "
                            textColor="text-red-600"></x-stat-card>
                        <x-stat-card title="Karyawan izin/sakit" value="10" subtext="Total 10 Hari"
                            icon="fa-solid fa-file-medical" borderColor="border-gray-200"
                            textColor=" text-yellow-600"></x-stat-card>
                        <x-stat-card title="Jumlah Karyawan" value="90" subtext="Karyawan aktif bulan ini"
                            icon="fa-solid fa-user-group" borderColor="border-gray-200" textColor="text-purple-700">
                        </x-stat-card>
                    </div>
                </div>

                <!-- ─── TABEL REKAP ────────────────────── -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">
                    <div class="flex items-start justify-between mb-4 flex-wrap gap-3 border-b border-slate-400 pb-4">
                        <div>
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-slate-500 text-xs"></i>
                                <h2 class="text-sm font-bold text-slate-800">Rekapan Detail Karyawan per Bulan</h2>
                            </div>
                            <div class="flex items-center gap-2 mt-2 flex-wrap">
                                <span
                                    class="inline-flex items-center gap-1 text-xs px-2.5 py-0.5 rounded-full bg-yellow-50 text-yellow-700 border border-yellow-300 font-semibold">
                                    <i class="fa-solid fa-clock text-[10px]"></i> Menunggu Persetujuan
                                </span>
                            </div>
                        </div>

                        <button
                            class="inline-flex items-center gap-1.5 bg-brand hover:bg-brand-dark text-white text-xs font-semibold px-3.5 py-2 rounded-lg transition-colors">
                            <i class="fa-solid fa-file-excel"></i> Export Excel
                        </button>
                    </div>

                    <x-tabel-rekap-absensi :koloms="range(1, 31)" :datas="$datas" />

                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100 flex-wrap gap-3">
                        <div class="flex items-center gap-2 text-sm text-slate-600">
                            <span>Status rekap:</span>
                            <span
                                class="inline-flex items-center gap-1.5 bg-yellow-50 border border-yellow-300 text-yellow-700 font-semibold text-xs px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-clock text-[10px]"></i> Menunggu Persetujuan
                            </span>
                            <span id="badgeBulan"
                                class="text-xs px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600 border border-slate-300 font-medium">
                                Maret 2026
                            </span>
                        </div>

                    </div>
                </div>

                <!-- ─── CHART ──────────────────────────── -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">

                    <!-- Header chart -->
                    <div class="flex items-center justify-between mb-2 flex-wrap gap-3">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-chart-column text-brand text-sm"></i>
                            <h2 class="text-sm font-bold text-slate-800">Rekap Kehadiran Bulanan</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <!-- Legend -->
                            <div class="flex items-center gap-3 text-[11px] text-slate-500">
                                <span class="flex items-center gap-1.5"><span
                                        class="inline-block w-2.5 h-2.5 rounded-sm bg-green-600"></span>Hadir</span>
                                <span class="flex items-center gap-1.5"><span
                                        class="inline-block w-2.5 h-2.5 rounded-sm bg-red-500"></span>Alpha</span>
                                <span class="flex items-center gap-1.5"><span
                                        class="inline-block w-2.5 h-2.5 rounded-sm bg-yellow-500"></span>Sakit/Izin</span>
                                <span class="flex items-center gap-1.5"><span
                                        class="inline-block w-2.5 h-2.5 rounded-sm bg-purple-500"></span>Lembur</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full">
                        <canvas id="chartRekap"></canvas>
                    </div>
                </div>

            </div><!-- /content -->
        </div><!-- /main -->
    </div><!-- /app -->
    <script src="{{ asset('js/admin-outsourcing/dashboard.js') }}"></script>

</body>

</html>