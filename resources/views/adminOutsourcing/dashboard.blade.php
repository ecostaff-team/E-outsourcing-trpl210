<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Outsorcing</title>
    
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

    <div class="flex">

        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-book'],
            ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-user-group'],
        ]" />

        {{-- MAIN CONTENT --}}
        <div class="flex-1 p-6">

            {{-- HEADER --}}
            <x-header>Admin Outsourcing</x-header>

            {{-- STAT CARDS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-3 mb-4 mt-2">

                {{-- Masuk --}}
                <div class="bg-white border-2 border-green-500 rounded-2xl p-3 flex items-center gap-3 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex-shrink-0 flex items-center justify-center">
                        <i class="fa-solid fa-user-check text-slate-700 text-lg"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-[11px] font-semibold text-slate-600 leading-tight">Karyawan Masuk</div>
                        <div class="text-2xl font-black text-green-600">850</div>
                        <div class="text-[9px] text-gray-400 uppercase tracking-tighter">Hari Ini</div>
                    </div>
                </div>

                {{-- Sakit --}}
                <div class="bg-white border-2 border-yellow-400 rounded-2xl p-3 flex items-center gap-3 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex-shrink-0 flex items-center justify-center">
                        <i class="fa-solid fa-notes-medical text-slate-700 text-lg"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-[11px] font-semibold text-slate-600 leading-tight">Karyawan Sakit</div>
                        <div class="text-2xl font-black text-yellow-600">115</div>
                        <div class="text-[9px] text-gray-400 uppercase tracking-tighter">Perlu Cek Surat</div>
                    </div>
                </div>

                {{-- Cuti --}}
                <div class="bg-white border-2 border-indigo-500 rounded-2xl p-3 flex items-center gap-3 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex-shrink-0 flex items-center justify-center">
                        <i class="fa-solid fa-plane-departure text-slate-700 text-lg"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-[11px] font-semibold text-slate-600 leading-tight">Karyawan Cuti</div>
                        <div class="text-2xl font-black text-indigo-600">50</div>
                        <div class="text-[9px] text-gray-400 uppercase tracking-tighter">Bulan Ini</div>
                    </div>
                </div>

                {{-- Izin --}}
                <div class="bg-white border-2 border-teal-500 rounded-2xl p-3 flex items-center gap-3 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex-shrink-0 flex items-center justify-center">
                        <i class="fa-solid fa-clipboard-check text-slate-700 text-lg"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-[11px] font-semibold text-slate-600 leading-tight">Karyawan Izin</div>
                        <div class="text-2xl font-black text-teal-600">33</div>
                        <div class="text-[9px] text-gray-400 uppercase tracking-tighter">Menunggu Konfirmasi</div>
                    </div>
                </div>

                {{-- Mangkir --}}
                <div class="bg-white border-2 border-red-500 rounded-2xl p-3 flex items-center gap-3 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gray-100 flex-shrink-0 flex items-center justify-center">
                        <i class="fa-solid fa-user-xmark text-slate-700 text-lg"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-[11px] font-semibold text-slate-600 leading-tight">Karyawan Mangkir</div>
                        <div class="text-2xl font-black text-red-600">13</div>
                        <div class="text-[9px] text-gray-400 uppercase tracking-tighter">Tanpa Keterangan</div>
                    </div>
                </div>

            </div>

            {{-- Rentang Tanggal --}}
            <div class="flex flex-col sm:flex-row gap-2 mb-4">
                <div class="relative w-64">

                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="far fa-calendar text-gray-500"></i>
                    </div>

                    <select
                        class="w-full border rounded-lg pl-9 pr-3 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-green-500 outline-none appearance-none bg-white cursor-pointer shadow-sm">
                        <option>Pilih Rentang Tanggal</option>
                        <option>Hari Ini</option>
                        <option>3 Hari Terakhir</option>
                        <option>7 Hari Terakhir</option>
                        <option>Bulan Ini</option>
                        <option>Bulan Lalu</option>
                    </select>

                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                    </div>
                </div>
            </div>

            {{-- CHART --}}
            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <h2 class="text-sm font-bold text-center text-gray-800 mb-4">Grafik Rekap Absensi Tenaga Kerja</h2>

                <div class="flex flex-wrap justify-center gap-4 mb-3 text-xs text-gray-500">
                    <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-sm bg-green-600 inline-block"></span>Masuk</span>
                    <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-sm bg-yellow-500 inline-block"></span>Sakit</span>
                    <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-sm bg-blue-700 inline-block"></span>Cuti</span>
                    <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-sm bg-purple-700 inline-block"></span>Izin</span>
                    <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-sm bg-red-600 inline-block"></span>Mangkir</span>
                </div>

                <div class="relative w-full" style="height: 300px;">
                    <canvas id="absensiChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const labels = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sep','Okt','Nov','Des'];
        new Chart(document.getElementById('absensiChart'), {
            type: 'bar',
            data: {
                labels,
                datasets: [
                    { label: 'Masuk',   data: [820,800,780,760,800,810,830,880,820,790,800,870], backgroundColor: '#16a34a' },
                    { label: 'Sakit',   data: [80,100,150,40,60,80,100,180,70,90,200,180],       backgroundColor: '#ca8a04' },
                    { label: 'Cuti',    data: [30,20,40,30,40,50,40,60,30,20,30,40],             backgroundColor: '#0369a1' },
                    { label: 'Izin',    data: [20,25,30,20,25,30,35,45,25,20,25,30],             backgroundColor: '#7c3aed' },
                    { label: 'Mangkir', data: [10,8,12,9,11,10,13,15,10,8,10,12],               backgroundColor: '#dc2626' },
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { ticks: { autoSkip: false }, grid: { display: false } },
                    y: { min: 0, max: 1000, ticks: { stepSize: 200 } }
                }
            }
        });
    });
    </script>

</body>
</html>