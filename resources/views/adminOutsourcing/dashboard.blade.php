<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Outsourcing</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex">

        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
        ['title' => 'Dashboard', 'icon' => 'fas fa-book'],
        ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-user-group'],
    ]" />

        <div class="flex-1 p-6">

            {{-- HEADER --}}
            <x-header>Admin Outsourcing</x-header>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6 mt-2">

                <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 flex-shrink-0">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-xs text-gray-500 uppercase tracking-wide font-medium">Total Hadir</div>
                        <div class="text-2xl font-extrabold text-green-600 leading-tight">78</div>
                        <div class="text-xs text-gray-400">80% hadir</div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center text-red-600 flex-shrink-0">
                        <i class="fa-solid fa-user-xmark"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-xs text-gray-500 uppercase tracking-wide font-medium">Total Alpha</div>
                        <div class="text-2xl font-extrabold text-red-600 leading-tight">10</div>
                        <div class="text-xs text-gray-400">10 hari</div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-600 flex-shrink-0">
                        <i class="fa-solid fa-file-medical"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-xs text-gray-500 uppercase tracking-wide font-medium">Sakit / Izin</div>
                        <div class="text-2xl font-extrabold text-yellow-600 leading-tight">10</div>
                        <div class="text-xs text-gray-400">10 hari</div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center text-purple-700 flex-shrink-0">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="flex-1 text-center">
                        <div class="text-xs text-gray-500 uppercase tracking-wide font-medium">Jml Karyawan</div>
                        <div class="text-2xl font-extrabold text-purple-700 leading-tight">5</div>
                        <div class="text-xs text-gray-400">Karyawan Aktif</div>
                    </div>
                </div>

            </div>

            {{-- FILTER REKAP --}}
            <div class="bg-white border border-gray-200 rounded-xl p-5 mb-6">
                <div class="flex items-center gap-2 mb-3">
                    <i class="fa-solid fa-magnifying-glass text-green-600 text-sm"></i>
                    <span class="font-bold text-gray-800 text-sm">Filter Rekap</span>
                </div>
                <div class="flex items-end gap-3 flex-wrap">
                    <div class="flex flex-col gap-1">
                        <label class="text-xs text-gray-500 font-medium">Bulan</label>
                        <select id="filterBulan" class="border-2 border-green-600 rounded-lg px-3 py-2 text-sm text-gray-700 bg-white focus:outline-none focus:ring-1 focus:ring-green-500 min-w-[180px]">
                            <option value="1-31">Januari 2026</option>
                            <option value="2-28">Februari 2026</option>
                            <option value="3-31" selected>Maret 2026</option>
                            <option value="4-30">April 2026</option>
                        </select>
                    </div>
                    <button onclick="renderTable()" class="bg-green-700 hover:bg-green-800 text-white text-sm font-semibold px-5 py-2 rounded-lg transition">
                        Tampilkan Rekap
                    </button>
                    <button onclick="document.getElementById('filterBulan').value='3-31'; renderTable()" class="border border-gray-300 text-gray-600 text-sm px-4 py-2 rounded-lg hover:bg-gray-50 transition">
                        Reset
                    </button>
                </div>
            </div>

            {{-- TABEL REKAP --}}
            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <div class="flex items-start justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-2 font-bold text-gray-800 text-sm">
                            <i class="fa-regular fa-calendar text-gray-500"></i>
                            Rekapan Detail Karyawan per Bulan
                        </div>
                        <div class="flex items-center gap-2 mt-2 flex-wrap">
                            <span id="badgeBulan" class="text-xs px-3 py-1 rounded-full bg-gray-100 text-gray-600 border border-gray-300">Maret 2026</span>
                            <span class="text-xs px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 border border-yellow-300 font-semibold">⚠ Menunggu Persetujuan</span>
                        </div>
                    </div>
                    <button class="flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white text-xs font-semibold px-4 py-2 rounded-lg transition">
                        <i class="fa-solid fa-file-excel"></i> Export Excel
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-xs border-collapse" style="min-width:1400px">
                        <thead>
                            <tr class="bg-gray-50" id="tHead"></tr>
                        </thead>
                        <tbody id="tBody"></tbody>
                    </table>
                </div>

                {{-- KETERANGAN --}}
                <div class="flex items-center gap-4 mt-3 text-xs text-gray-500 flex-wrap">
                    <span class="font-medium text-gray-600">Keterangan:</span>
                    <span class="flex items-center gap-1"><span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-green-100 text-green-600 text-[10px] font-bold">H</span> Hadir</span>
                    <span class="flex items-center gap-1"><span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-red-100 text-red-500 text-[10px] font-bold">A</span> Alpha</span>
                    <span class="flex items-center gap-1"><span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-amber-100 text-amber-500 text-[10px] font-bold">S</span> Sakit</span>
                    <span class="flex items-center gap-1"><span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-sky-100 text-sky-500 text-[10px] font-bold">I</span> Izin</span>
                    <span class="flex items-center gap-1"><span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-purple-100 text-purple-500 text-[10px] font-bold">L</span> Lembur</span>
                    <span class="flex items-center gap-1 text-gray-400 font-bold">– Libur</span>
                    <span class="ml-auto text-gray-400">Menampilkan 1-3 dari 3 karyawan</span>
                    <span class="inline-flex items-center justify-center w-6 h-6 rounded bg-green-700 text-white font-bold text-xs cursor-pointer">1</span>
                </div>

                {{-- STATUS & ACTION --}}
                <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100 flex-wrap gap-3">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <span>Status rekap:</span>
                        <span class="flex items-center gap-1.5 bg-yellow-100 border border-yellow-300 text-yellow-700 font-semibold text-xs px-3 py-1.5 rounded-full">
                            <i class="fa-solid fa-clock text-xs"></i> Menunggu Persetujuan
                        </span>
                    </div>
                    <div class="flex gap-3">
                        <button class="flex items-center gap-2 border-2 border-red-500 text-red-600 hover:bg-red-50 font-semibold text-sm px-4 py-2 rounded-lg transition">
                            <i class="fa-solid fa-xmark"></i> Tolak Rekap
                        </button>
                        <button class="flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold text-sm px-4 py-2 rounded-lg transition">
                            <i class="fa-solid fa-check"></i> Setujui Rekap
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Weekend per bulan
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
                warna: 'bg-green-600',
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
                warna: 'bg-blue-600',
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
                warna: 'bg-purple-600',
                posisi: 'Helper',
                abs: ['H', 'H', 'L', 'S', 'A', 'H', 'H', 'H', 'H', 'L', 'H', 'H', 'H', 'A', 'H', 'H', 'H', 'I', 'L', 'S', 'H', 'H', 'H', 'H', 'H', 'H', 'H', '-', 'H', 'H', 'H'],
                H: 14,
                A: 2,
                SI: 3,
                L: 3
            },
        ];

        // Badge HTML per status
        const BADGE = {
            H: `<span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-green-100 text-green-600 text-[10px] font-bold">H</span>`,
            A: `<span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-red-100 text-red-500 text-[10px] font-bold">A</span>`,
            S: `<span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-amber-100 text-amber-500 text-[10px] font-bold">S</span>`,
            I: `<span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-sky-100 text-sky-500 text-[10px] font-bold">I</span>`,
            L: `<span class="inline-flex items-center justify-center w-5 h-5 rounded-md bg-purple-100 text-purple-500 text-[10px] font-bold">L</span>`,
            '-': `<span class="text-gray-300 text-[10px] font-bold">–</span>`,
        };

        function renderTable() {
            const [bln, days] = document.getElementById('filterBulan').value.split('-').map(Number);
            const we = WE[bln];

            // -- THEAD --
            const thCols = Array.from({
                    length: days
                }, (_, i) =>
                `<th class="px-1 py-2 font-semibold border-b border-gray-200 text-center w-7 ${we.includes(i+1) ? 'text-red-500' : 'text-gray-500'}">${i+1}</th>`
            ).join('');

            document.getElementById('tHead').innerHTML = `
        <th class="text-left px-2 py-2 text-gray-500 font-semibold border-b border-gray-200 sticky left-0 bg-gray-50 z-10 w-8">#</th>
        <th class="text-left px-3 py-2 text-gray-500 font-semibold border-b border-gray-200 sticky left-8 bg-gray-50 z-10 min-w-[160px]">Nama Karyawan</th>
        <th class="px-2 py-2 text-gray-500 font-semibold border-b border-gray-200 min-w-[70px]">Posisi</th>
        ${thCols}
        <th class="px-2 py-2 text-green-600 font-bold border-b border-gray-200 text-center">H</th>
        <th class="px-2 py-2 text-red-600 font-bold border-b border-gray-200 text-center">A</th>
        <th class="px-2 py-2 text-yellow-600 font-bold border-b border-gray-200 text-center">S/I</th>
        <th class="px-2 py-2 text-purple-600 font-bold border-b border-gray-200 text-center">L</th>`;

            // -- TBODY --
            const rows = DATA.map(k => {
                const absCols = Array.from({
                        length: days
                    }, (_, i) =>
                    `<td class="px-0.5 py-1 text-center ${we.includes(i+1) ? 'bg-red-50' : ''}">${BADGE[k.abs[i]] ?? BADGE['-']}</td>`
                ).join('');
                return `
        <tr class="hover:bg-gray-50 border-b border-gray-100">
            <td class="px-2 py-2 text-center text-gray-500 sticky left-0 bg-white">${k.no}</td>
            <td class="px-3 py-2 sticky left-8 bg-white">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full flex items-center justify-center text-white text-xs font-bold flex-shrink-0 ${k.warna}">${k.inisial}</div>
                    <div>
                        <div class="font-semibold text-gray-800">${k.nama}</div>
                        <div class="text-gray-400">#${k.kode}</div>
                    </div>
                </div>
            </td>
            <td class="px-2 py-2 text-center text-gray-600">${k.posisi}</td>
            ${absCols}
            <td class="px-2 py-2 text-center font-bold text-green-600">${k.H}</td>
            <td class="px-2 py-2 text-center font-bold text-red-600">${k.A}</td>
            <td class="px-2 py-2 text-center font-bold text-yellow-600">${k.SI}</td>
            <td class="px-2 py-2 text-center font-bold text-purple-600">${k.L}</td>
        </tr>`;
            }).join('');

            const totalCols = Array.from({
                    length: days
                }, (_, i) =>
                `<td class="${we.includes(i+1) ? 'bg-red-50' : ''}"></td>`
            ).join('');

            document.getElementById('tBody').innerHTML = rows + `
        <tr class="bg-gray-50 border-t-2 border-gray-300">
            <td colspan="3" class="px-2 py-2 text-center text-xs font-bold text-gray-600 sticky left-0 bg-gray-50">TOTAL REKAP</td>
            ${totalCols}
            <td class="px-2 py-2 text-center font-bold text-green-600">45</td>
            <td class="px-2 py-2 text-center font-bold text-red-600">7</td>
            <td class="px-2 py-2 text-center font-bold text-yellow-600">6</td>
            <td class="px-2 py-2 text-center font-bold text-purple-600">8</td>
        </tr>`;

            // Update badge bulan
            document.getElementById('badgeBulan').textContent = BULAN_LABEL[bln];
        }

        renderTable(); // jalankan saat halaman load
    </script>

</body>

</html>