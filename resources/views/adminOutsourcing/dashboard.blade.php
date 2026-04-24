<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Outsourcing</title>

       <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#16a34a',
                            dark: '#15803d',
                            light: '#dcfce7',
                            mid: '#bbf7d0'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Sticky columns */
        .sticky-no {
            position: sticky;
            left: 0;
            z-index: 5;
        }

        .sticky-nama {
            position: sticky;
            left: 30px;
            z-index: 5;
        }

        thead .sticky-no,
        thead .sticky-nama {
            z-index: 6;
        }

        /* Hide scrollbar but keep scroll */
        .table-scroll {
            overflow-x: auto;
        }

        .table-scroll::-webkit-scrollbar {
            height: 4px;
        }

        .table-scroll::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 9999px;
        }

        .table-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }
    </style>
</head>

<body class="bg-slate-100 font-sans text-slate-800 antialiased">
    <div class="flex min-h-screen">

    <x-sidebar :menus="[
    ['title' => 'Dashboard', 'icon' => 'fas fa-home'],
    ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-users'],
    ['title' => 'Kelola Karyawan', 'icon' => 'fas fa-user-cog'],
        ]">Admin Outsourcing</x-sidebar>

        <div class="flex-1 p-6 min-w-0 flex flex-col overflow-hidden">

            <!-- HEADER -->
           <x-header>Admin Outsourcing</x-header>

            <!-- CONTENT -->
            <div class="py-5 flex flex-col gap-4 overflow-y-auto">

                <!--  STAT CARDS  -->
                <div class="grid grid-cols-4 gap-3">

                    <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-green-100 text-green-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold text-slate-400 uppercase tracking-wide">Total Hadir</p>
                            <p class="text-2xl font-bold text-green-600 leading-tight">78</p>
                            <p class="text-[10px] text-slate-400">80% hadir</p>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-red-100 text-red-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-xmark"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold text-slate-400 uppercase tracking-wide">Total Alpha</p>
                            <p class="text-2xl font-bold text-red-600 leading-tight">10</p>
                            <p class="text-[10px] text-slate-400">10 hari</p>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-yellow-100 text-yellow-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-file-medical"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold text-slate-400 uppercase tracking-wide">Sakit / Izin</p>
                            <p class="text-2xl font-bold text-yellow-600 leading-tight">10</p>
                            <p class="text-[10px] text-slate-400">10 hari</p>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold text-slate-400 uppercase tracking-wide">Jml Karyawan</p>
                            <p class="text-2xl font-bold text-purple-700 leading-tight">5</p>
                            <p class="text-[10px] text-slate-400">Karyawan Aktif</p>
                        </div>
                    </div>

                </div>

                <!-- FILTER  -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">
                    <div class="flex items-center gap-2 mb-4">
                        <i class="fa-solid fa-sliders text-brand text-sm"></i>
                        <h2 class="text-sm font-bold text-slate-800">Filter Rekap</h2>
                    </div>
                    <div class="flex items-end gap-2.5 flex-wrap">
                        <div class="flex flex-col gap-1">
                            <label class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">Bulan</label>
                            <select id="filterBulan"
                                class="border-2 border-brand rounded-lg px-3 py-2 text-sm text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-brand-mid min-w-45 font-medium">
                                <option value="1-31">Januari 2026</option>
                                <option value="2-28">Februari 2026</option>
                                <option value="3-31" selected>Maret 2026</option>
                                <option value="4-30">April 2026</option>
                            </select>
                        </div>
                        <button onclick="renderTable()"
                            class="inline-flex items-center gap-2 bg-brand hover:bg-brand-dark text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors">
                            <i class="fa-solid fa-magnifying-glass text-xs"></i> Tampilkan
                        </button>
                        <button onclick="document.getElementById('filterBulan').value='3-31'; renderTable()"
                            class="inline-flex items-center gap-2 bg-white border border-slate-300 text-slate-600 hover:bg-slate-50 text-sm font-medium px-4 py-2 rounded-lg transition-colors">
                            <i class="fa-solid fa-rotate-left text-xs"></i> Reset
                        </button>
                    </div>
                </div>

                <!-- ─── TABEL REKAP ────────────────────── -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">

                    <!-- Header tabel -->
                    <div class="flex items-start justify-between mb-4 flex-wrap gap-3">
                        <div>
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-slate-500 text-xs"></i>
                                <h2 class="text-sm font-bold text-slate-800">Rekapan Detail Karyawan per Bulan</h2>
                            </div>
                            <div class="flex items-center gap-2 mt-2 flex-wrap">
                                <span id="badgeBulan"
                                    class="text-xs px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600 border border-slate-300 font-medium">
                                    Maret 2026
                                </span>
                                <span class="inline-flex items-center gap-1 text-xs px-2.5 py-0.5 rounded-full bg-yellow-50 text-yellow-700 border border-yellow-300 font-semibold">
                                    <i class="fa-solid fa-clock text-[10px]"></i> Menunggu Persetujuan
                                </span>
                            </div>
                        </div>
                        <button class="inline-flex items-center gap-1.5 bg-brand hover:bg-brand-dark text-white text-xs font-semibold px-3.5 py-2 rounded-lg transition-colors">
                            <i class="fa-solid fa-file-excel"></i> Export Excel
                        </button>
                    </div>

                    <!-- Table -->
                    <div class="table-scroll rounded-lg border border-slate-100">
                        <table class="w-full text-[11px] border-collapse" style="table-layout:fixed;" id="rekapTable">
                            <colgroup id="colgroup"></colgroup>
                            <thead>
                                <tr id="tHead" class="bg-slate-50"></tr>
                            </thead>
                            <tbody id="tBody"></tbody>
                        </table>
                    </div>

                    <!-- Keterangan -->
                    <div class="flex items-center gap-3 mt-3.5 text-[11px] text-slate-500 flex-wrap">
                        <span class="font-semibold text-slate-700">Keterangan:</span>
                        <span class="flex items-center gap-1">
                            <span class="inline-flex items-center justify-center w-4 h-4 rounded bg-green-100 text-green-700 text-[9px] font-bold">H</span> Hadir
                        </span>
                        <span class="flex items-center gap-1">
                            <span class="inline-flex items-center justify-center w-4 h-4 rounded bg-red-100 text-red-600 text-[9px] font-bold">A</span> Alpha
                        </span>
                        <span class="flex items-center gap-1">
                            <span class="inline-flex items-center justify-center w-4 h-4 rounded bg-yellow-100 text-yellow-700 text-[9px] font-bold">S</span> Sakit
                        </span>
                        <span class="flex items-center gap-1">
                            <span class="inline-flex items-center justify-center w-4 h-4 rounded bg-sky-100 text-sky-700 text-[9px] font-bold">I</span> Izin
                        </span>
                        <span class="flex items-center gap-1">
                            <span class="inline-flex items-center justify-center w-4 h-4 rounded bg-purple-100 text-purple-700 text-[9px] font-bold">L</span> Lembur
                        </span>
                        <span class="flex items-center gap-1 font-bold text-slate-300">–</span>
                        <span class="-ml-2">Libur</span>
                        <span class="ml-auto text-slate-400">Menampilkan 1–3 dari 3 karyawan</span>
                    </div>

                    <!-- Status & Aksi -->
                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100 flex-wrap gap-3">
                        <div class="flex items-center gap-2 text-sm text-slate-600">
                            <span>Status rekap:</span>
                            <span class="inline-flex items-center gap-1.5 bg-yellow-50 border border-yellow-300 text-yellow-700 font-semibold text-xs px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-clock text-[10px]"></i> Menunggu Persetujuan
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="inline-flex items-center gap-1.5 border-2 border-red-400 text-red-600 hover:bg-red-50 font-semibold text-xs px-3.5 py-1.5 rounded-lg transition-colors">
                                <i class="fa-solid fa-xmark"></i> Tolak Rekap
                            </button>
                            <button class="inline-flex items-center gap-1.5 bg-brand hover:bg-brand-dark text-white font-semibold text-xs px-3.5 py-1.5 rounded-lg transition-colors">
                                <i class="fa-solid fa-check"></i> Setujui Rekap
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ─── CHART ──────────────────────────── -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">

                    <!-- Header chart -->
                    <div class="flex items-center justify-between mb-4 flex-wrap gap-3">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-chart-column text-brand text-sm"></i>
                            <h2 class="text-sm font-bold text-slate-800">Rekap Kehadiran Bulanan</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <!-- Legend -->
                            <div class="flex items-center gap-3 text-[11px] text-slate-500">
                                <span class="flex items-center gap-1.5"><span class="inline-block w-2.5 h-2.5 rounded-sm bg-green-600"></span>Hadir</span>
                                <span class="flex items-center gap-1.5"><span class="inline-block w-2.5 h-2.5 rounded-sm bg-red-500"></span>Alpha</span>
                                <span class="flex items-center gap-1.5"><span class="inline-block w-2.5 h-2.5 rounded-sm bg-yellow-500"></span>Sakit/Izin</span>
                                <span class="flex items-center gap-1.5"><span class="inline-block w-2.5 h-2.5 rounded-sm bg-purple-500"></span>Lembur</span>
                            </div>
                            <!-- Filter tanggal -->
                            <select class="border border-slate-200 rounded-lg px-3 py-1.5 text-xs text-slate-600 bg-white focus:outline-none focus:ring-2 focus:ring-brand-mid">
                                <option>Pilih Rentang Tanggal</option>
                                <option>Hari Ini</option>
                                <option>7 Hari Terakhir</option>
                                <option>Bulan Ini</option>
                                <option>Bulan Lalu</option>
                            </select>
                        </div>
                    </div>

                    <div class="relative w-full" style="height:200px;">
                        <canvas id="chartRekap"></canvas>
                    </div>
                </div>

            </div><!-- /content -->
        </div><!-- /main -->
    </div><!-- /app -->

    <script>
        const WE = {
            1: [3, 4, 10, 11, 17, 18, 24, 25, 31],
            2: [1, 7, 8, 14, 15, 21, 22, 28],
            3: [1, 7, 8, 14, 15, 21, 22, 28, 29],
            4: [4, 5, 11, 12, 18, 19, 25, 26]
        };

        const BULAN_LABEL = {
            1: 'Januari 2026',
            2: 'Februari 2026',
            3: 'Maret 2026',
            4: 'April 2026'
        };

        const DATA = [{
                no: 1,
                nama: 'Irwan Santoso',
                kode: 'IP001',
                inisial: 'IS',
                warna: '#16a34a',
                posisi: 'Operator',
                abs: ['H', 'L', 'H', 'H', 'H', 'A', 'H', 'H', 'L', 'H', 'H', 'H', 'H', 'A', 'H', 'H', 'I', 'L', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '-', 'H', 'H', 'H'],
                H: 16,
                A: 2,
                SI: 1,
                L: 3
            },
            {
                no: 2,
                nama: 'Juliana Putri',
                kode: 'IP002',
                inisial: 'JP',
                warna: '#2563eb',
                posisi: 'Teknisi',
                abs: ['H', 'H', 'A', 'H', 'S', 'L', 'H', 'H', 'H', 'A', 'H', 'H', 'H', 'H', 'H', 'H', 'I', 'H', 'H', 'H', 'H', 'A', 'H', 'H', 'H', 'H', 'H', '-', 'H', 'H', 'H'],
                H: 15,
                A: 3,
                SI: 2,
                L: 2
            },
            {
                no: 3,
                nama: 'Karno Wibowo',
                kode: 'IP003',
                inisial: 'KW',
                warna: '#9333ea',
                posisi: 'Helper',
                abs: ['H', 'H', 'L', 'S', 'A', 'H', 'H', 'H', 'H', 'L', 'H', 'H', 'H', 'A', 'H', 'H', 'H', 'I', 'L', 'S', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '-', 'H', 'H', 'H'],
                H: 14,
                A: 2,
                SI: 3,
                L: 3
            },
        ];

        // Attendance badge HTML
        const BADGE = {
            H: `<span class="inline-flex items-center justify-center w-4 h-4 rounded bg-green-100 text-green-700 text-[9px] font-bold">H</span>`,
            A: `<span class="inline-flex items-center justify-center w-4 h-4 rounded bg-red-100 text-red-600 text-[9px] font-bold">A</span>`,
            S: `<span class="inline-flex items-center justify-center w-4 h-4 rounded bg-yellow-100 text-yellow-700 text-[9px] font-bold">S</span>`,
            I: `<span class="inline-flex items-center justify-center w-4 h-4 rounded bg-sky-100 text-sky-700 text-[9px] font-bold">I</span>`,
            L: `<span class="inline-flex items-center justify-center w-4 h-4 rounded bg-purple-100 text-purple-700 text-[9px] font-bold">L</span>`,
            '-': `<span class="text-slate-300 text-[9px] font-bold">–</span>`,
        };

        function renderTable() {
            const [bln, days] = document.getElementById('filterBulan').value.split('-').map(Number);
            const we = WE[bln];

            // ── Colgroup (fixed widths) ──────────────────
            let cg = `<col style="width:30px"><col style="width:150px"><col style="width:62px">`;
            for (let i = 0; i < days; i++) cg += `<col style="width:20px">`;
            cg += `<col style="width:28px"><col style="width:28px"><col style="width:28px"><col style="width:28px">`;
            document.getElementById('colgroup').innerHTML = cg;

            // ── THEAD ────────────────────────────────────
            const dayCols = Array.from({
                length: days
            }, (_, i) => {
                const isWe = we.includes(i + 1);
                return `<th class="py-2 text-center font-semibold border-b border-slate-200 text-[10px] ${isWe ? 'text-red-400' : 'text-slate-500'}">${i + 1}</th>`;
            }).join('');

            document.getElementById('tHead').innerHTML = `
    <th class="sticky-no bg-slate-50 py-2 pl-2 text-left text-[10px] font-semibold text-slate-500 border-b border-slate-200">#</th>
    <th class="sticky-nama bg-slate-50 py-2 pl-3 text-left text-[10px] font-semibold text-slate-500 border-b border-slate-200">Nama Karyawan</th>
    <th class="bg-slate-50 py-2 text-center text-[10px] font-semibold text-slate-500 border-b border-slate-200">Posisi</th>
    ${dayCols}
    <th class="bg-slate-50 py-2 text-center text-[10px] font-bold text-green-600 border-b border-slate-200">H</th>
    <th class="bg-slate-50 py-2 text-center text-[10px] font-bold text-red-500 border-b border-slate-200">A</th>
    <th class="bg-slate-50 py-2 text-center text-[10px] font-bold text-yellow-600 border-b border-slate-200">S/I</th>
    <th class="bg-slate-50 py-2 text-center text-[10px] font-bold text-purple-600 border-b border-slate-200">L</th>`;

            // ── TBODY ────────────────────────────────────
            const rows = DATA.map(k => {
                const absCols = Array.from({
                    length: days
                }, (_, i) => {
                    const isWe = we.includes(i + 1);
                    return `<td class="py-1.5 text-center ${isWe ? 'bg-red-50' : ''}">${BADGE[k.abs[i]] ?? BADGE['-']}</td>`;
                }).join('');

                return `
      <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
        <td class="sticky-no bg-white py-1.5 pl-2 text-center text-slate-400">${k.no}</td>
        <td class="sticky-nama bg-white py-1.5">
          <div class="flex items-center gap-2 pl-2">
            <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-[9px] font-bold flex-shrink-0"
                 style="background:${k.warna};">${k.inisial}</div>
            <div>
              <p class="font-semibold text-slate-800 text-[11px] leading-tight">${k.nama}</p>
              <p class="text-slate-400 text-[10px]">#${k.kode}</p>
            </div>
          </div>
        </td>
        <td class="py-1.5 text-center text-slate-600">${k.posisi}</td>
        ${absCols}
        <td class="py-1.5 text-center font-bold text-green-600">${k.H}</td>
        <td class="py-1.5 text-center font-bold text-red-500">${k.A}</td>
        <td class="py-1.5 text-center font-bold text-yellow-600">${k.SI}</td>
        <td class="py-1.5 text-center font-bold text-purple-600">${k.L}</td>
      </tr>`;
            }).join('');

            const totalBlank = Array.from({
                    length: days
                }, (_, i) =>
                `<td class="${we.includes(i + 1) ? 'bg-red-50' : ''}"></td>`
            ).join('');

            document.getElementById('tBody').innerHTML = rows + `
    <tr class="bg-slate-50 border-t-2 border-slate-300">
      <td colspan="3" class="sticky-no bg-slate-50 py-2.5 pl-2 text-[11px] font-bold text-slate-700 text-center">TOTAL REKAP</td>
      ${totalBlank}
      <td class="py-2.5 text-center font-bold text-green-600">45</td>
      <td class="py-2.5 text-center font-bold text-red-500">7</td>
      <td class="py-2.5 text-center font-bold text-yellow-600">6</td>
      <td class="py-2.5 text-center font-bold text-purple-600">8</td>
    </tr>`;

            document.getElementById('badgeBulan').textContent = BULAN_LABEL[bln];
        }

        renderTable();
    </script>

    <script>
        const monthlyData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            H: [45, 42, 45, 38, 47, 44, 46, 43, 45, 40, 42, 44],
            A: [7, 5, 7, 6, 4, 5, 3, 6, 5, 8, 6, 4],
            SI: [6, 8, 6, 7, 5, 7, 6, 5, 7, 6, 7, 8],
            L: [8, 6, 9, 5, 7, 8, 6, 9, 7, 5, 8, 7],
        };

        let chartInstance = null;

        function renderChart() {
            if (chartInstance) chartInstance.destroy();
            chartInstance = new Chart(document.getElementById('chartRekap'), {
                type: 'bar',
                data: {
                    labels: monthlyData.labels,
                    datasets: [{
                            label: 'Hadir',
                            data: monthlyData.H,
                            backgroundColor: '#16a34a',
                            borderRadius: 4,
                            barPercentage: .72
                        },
                        {
                            label: 'Alpha',
                            data: monthlyData.A,
                            backgroundColor: '#ef4444',
                            borderRadius: 4,
                            barPercentage: .72
                        },
                        {
                            label: 'Sakit/Izin',
                            data: monthlyData.SI,
                            backgroundColor: '#eab308',
                            borderRadius: 4,
                            barPercentage: .72
                        },
                        {
                            label: 'Lembur',
                            data: monthlyData.L,
                            backgroundColor: '#9333ea',
                            borderRadius: 4,
                            barPercentage: .72
                        },
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    family: 'Plus Jakarta Sans'
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 10,
                                font: {
                                    size: 11
                                }
                            },
                            grid: {
                                color: '#f1f5f9'
                            }
                        }
                    }
                }
            });
        }

        // Wrap renderTable to also update chart
        const _origRender = renderTable;
        renderTable = () => {
            _origRender();
            renderChart();
        };
        renderTable();
    </script>

</body>

</html>