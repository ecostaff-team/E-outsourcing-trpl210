<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #map {
            z-index: 1;
        }

        .inp-label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.375rem;
        }

        .req {
            color: #ef4444;
        }

        .inp {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 0.625rem 0.875rem;
            font-size: 0.875rem;
            color: #111827;
            outline: none;
            transition: border-color .15s, box-shadow .15s;
            background: #fff;
        }

        .inp:focus {
            border-color: #3C8B5E;
            box-shadow: 0 0 0 3px rgba(60, 139, 94, .12);
        }

        .inp::placeholder {
            color: #9ca3af;
        }

        .slide-track {
            display: flex;
            transition: transform .4s cubic-bezier(.4, 0, .2, 1);
        }

        .slide-panel {
            min-width: 100%;
            box-sizing: border-box;
        }

        .fade-in-up {
            animation: fadeUp .4s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Section accent bar */
        .section-bar {
            width: 3px;
            height: 1.25rem;
            border-radius: 9999px;
            flex-shrink: 0;
        }
    </style>
</head>

<body x-data="{ open: false }" class="bg-gray-100">
    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <x-sidebar :menus="[
            ['title' => 'Absensi', 'icon' => 'fas fa-home', 'ref' => '/karyawanOutsourcing/dahsboard'],
            ['title' => 'Jadwalku', 'icon' => 'fas fa-users', 'ref' => '/karyawanOutsourcing/jadwal-karyawan'],
            ['title' => 'Pengajuan Lembur', 'icon' => 'fas fa-users', 'ref' => '/karyawanOutsourcing/pengajuanKaryawan'],
            ['title' => 'Perizinan Sakit', 'icon' => 'fas fa-cog', 'ref' => '#'],
        ]">Karyawan Outsourcing</x-sidebar>

        <!-- OVERLAY -->
        <div x-show="open" @click="open = false"
            class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>
            
        <!-- MAIN CONTENT -->
        <div class="flex-1 p-6">

            <!-- TOP HEADER -->
            <div class="flex items-center justify-between mb-6">
                <button @click="open = !open"
                    class="md:hidden bg-white p-2 rounded-lg shadow transition hover:scale-110 active:scale-95">☰</button>

                <div class="text-center">
                    <h3 class="text-emerald-900 font-bold text-lg md:text-2xl">
                        <img src="/images/logo.png" class="w-8 inline-block ml-2"> EcoGreen
                    </h3>
                </div>

                <div x-data="{ openProfile: false }" class="relative">
                    <div @click="openProfile = !openProfile"
                        class="flex items-center gap-1 bg-white px-2 py-1 rounded-xl shadow cursor-pointer hover:shadow-lg transition md:px-4 md:py-2 md:gap-3">
                        <img src="/images/profile.jpg" class="w-10 h-10 rounded-full object-cover">
                        <div class="hidden md:block">
                            <p class="text-sm font-semibold text-gray-800">Rangga Racing</p>
                            <p class="text-xs text-gray-500">Staff Outsourcing</p>
                        </div>
                        <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition md:text-sm"
                            :class="openProfile ? 'rotate-180' : ''"></i>
                    </div>
                    <div x-show="openProfile" @click.outside="openProfile = false" x-transition
                        class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg overflow-hidden z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">👤 Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">🔒 Ganti Password</a>
                        <hr>
                        <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-50">🚪 Logout</a>
                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT -->
            <div class="space-y-6">

                <!-- Page title -->
                <div class="fade-in-up">
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Pengajuan Lembur ⏱️</h1>
                    <p class="text-sm text-gray-500 mt-0.5">Isi form pengajuan lembur atau laporan selesai lembur</p>
                </div>

                <!-- FORM CARD -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up" style="animation-delay:.05s">

                    <!-- Card header + tab pills -->
                    <div style="background: linear-gradient(to right, #2d6e4a, #3C8B5E);" class="px-5 py-5">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div>
                                <h2 class="text-white font-bold text-base">
                                    <i class="fa-solid fa-file-circle-plus mr-2 opacity-75"></i>Form Pengajuan
                                </h2>
                                <p class="text-green-200 text-xs mt-0.5">Pilih jenis Pengajuan</p>
                            </div>

                            <!-- Tab pills -->
                            <div class="flex rounded-xl overflow-hidden border border-white/40 self-start sm:self-auto">
                                <button onclick="switchTab(0)" id="tabBtn0"
                                    class="px-5 py-2 text-sm font-semibold transition-all duration-300 flex items-center gap-2 bg-white text-[#2d6e4a] border-r border-white/30">
                                    <i class="fa-solid fa-stopwatch text-xs"></i>
                                    Pengajuan Lembur
                                </button>
                                <button onclick="switchTab(1)" id="tabBtn1"
                                    class="px-5 py-2 text-sm font-semibold transition-all duration-300 flex items-center gap-2 text-white hover:bg-white/10">
                                    <i class="fa-solid fa-flag-checkered text-xs"></i>
                                    Selesai Lembur
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide track -->
                    <div style="overflow:hidden">
                        <div class="slide-track" id="slideTrack" style="transform:translateX(0%)">

                            <!-- PANEL 0: Pengajuan Lembur -->
                            <div class="slide-panel px-6 py-6">
                                <!-- Section title -->
                                <div class="flex items-center gap-2 mb-5">
                                    <div class="section-bar bg-[#3C8B5E]"></div>
                                    <h3 class="font-semibold text-gray-700 text-sm">Data Diri — Pengajuan Lembur</h3>
                                </div>

                                <div class="grid md:grid-cols-2 gap-x-6 gap-y-4">
                                    <div>
                                        <label class="inp-label">NIM <span class="req">*</span></label>
                                        <input id="nim0" type="text" value="1406200062026" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Nama Lengkap <span class="req">*</span></label>
                                        <input id="nama0" type="text" value="Rangga Racing" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">No. HP <span class="req">*</span></label>
                                        <input id="noHp0" type="tel" value="085363356775" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Email <span class="req">*</span></label>
                                        <input id="email0" type="email" value="rangga@gmail.com" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Tanggal Lembur <span class="req">*</span></label>
                                        <input id="tanggal0" type="date" class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">
                                            Asal Departemen
                                            <span class="ml-1 text-xs px-2 py-0.5 rounded-full"></span>
                                        </label>
                                        <input type="text" value="Kebersihan" readonly class="inp">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="inp-label">Alamat <span class="req">*</span></label>
                                        <input id="alamat0" type="text" value="Nongsa No 12" readonly class="inp">
                                    </div>

                                    <!-- Keterangan -->
                                    <div class="md:col-span-2">
                                        <div class="flex items-center gap-2 mb-3 mt-2">
                                            <div class="section-bar bg-blue-400"></div>
                                            <h3 class="font-semibold text-gray-700 text-sm">Keterangan</h3>
                                        </div>
                                        <label class="inp-label">Apa yang akan dikerjakan hari ini? <span class="req">*</span></label>
                                        <textarea id="ket0" rows="7" oninput="hitungKata(0)"
                                            placeholder="Tuliskan rencana pekerjaan yang akan dilakukan saat lembur..."
                                            class="inp resize-none leading-relaxed" style="min-height:160px;"></textarea>
                                        <!-- word counter -->
                                        <div class="mt-2 flex items-center justify-end gap-3">
                                            <div class="flex-1 bg-gray-100 rounded-full overflow-hidden" style="height:4px">
                                                <div id="bar0" class="h-full rounded-full transition-all" style="width:0%;background:#3C8B5E"></div>
                                            </div>
                                            <span class="text-xs text-gray-400 whitespace-nowrap">
                                                <span id="wc0" class="font-semibold text-gray-600">0</span> / 300 kata
                                            </span>
                                        </div>
                                        <p id="warn0" class="text-xs text-red-500 mt-1 hidden">
                                            <i class="fa-solid fa-triangle-exclamation mr-1"></i>Melebihi batas 300 kata!
                                        </p>
                                    </div>
                                </div>

                                <!-- Footer actions -->
                                <div class="flex justify-end gap-3 mt-6 pt-5 border-t border-gray-100">
                                    <button onclick="submit(0)"
                                        class="px-6 py-2.5 rounded-xl text-white text-sm font-semibold transition active:scale-95 flex items-center gap-2 shadow-sm"
                                        style="background:#3C8B5E">
                                        <i class="fa-solid fa-paper-plane"></i>Ajukan Lembur
                                    </button>
                                </div>
                            </div>
                            <!-- /panel 0 -->

                            <!-- PANEL 1: Selesai Lembur -->
                            <div class="slide-panel px-6 py-6">
                                <div class="flex items-center gap-2 mb-5">
                                    <div class="section-bar bg-purple-500"></div>
                                    <h3 class="font-semibold text-gray-700 text-sm">Data Diri — Selesai Lembur</h3>
                                </div>

                                <div class="grid md:grid-cols-2 gap-x-6 gap-y-4">
                                    <div>
                                        <label class="inp-label">NIM <span class="req">*</span></label>
                                        <input id="nim1" type="text" value="1406200062026" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Nama Lengkap <span class="req">*</span></label>
                                        <input id="nama1" type="text" value="Rangga Racing" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">No. HP <span class="req">*</span></label>
                                        <input id="noHp1" type="tel" value="085363356775" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Email <span class="req">*</span></label>
                                        <input id="email1" type="email" value="rangga@gmail.com" readonly class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">Tanggal Lembur <span class="req">*</span></label>
                                        <input id="tanggal1" type="date" class="inp">
                                    </div>
                                    <div>
                                        <label class="inp-label">
                                            Asal Departemen
                                            <span class="ml-1 text-xs px-2 py-0.5 rounded-full"></span>
                                        </label>
                                        <input type="text" value="Kebersihan" readonly class="inp">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="inp-label">Alamat <span class="req">*</span></label>
                                        <input id="alamat1" type="text" value="Nongsa No 12" readonly class="inp">
                                    </div>

                                    <div class="md:col-span-2">
                                        <div class="flex items-center gap-2 mb-3 mt-2">
                                            <div class="section-bar bg-purple-400"></div>
                                            <h3 class="font-semibold text-gray-700 text-sm">Keterangan</h3>
                                        </div>
                                        <label class="inp-label">Apa yang telah dikerjakan hari ini? <span class="req">*</span></label>
                                        <textarea id="ket1" rows="7" oninput="hitungKata(1)"
                                            placeholder="Tuliskan hasil pekerjaan yang telah diselesaikan saat lembur..."
                                            class="inp resize-none leading-relaxed" style="min-height:160px;"></textarea>
                                        <div class="mt-2 flex items-center justify-end gap-3">
                                            <div class="flex-1 bg-gray-100 rounded-full overflow-hidden" style="height:4px">
                                                <div id="bar1" class="h-full rounded-full transition-all" style="width:0%;background:#7c3aed"></div>
                                            </div>
                                            <span class="text-xs text-gray-400 whitespace-nowrap">
                                                <span id="wc1" class="font-semibold text-gray-600">0</span> / 300 kata
                                            </span>
                                        </div>
                                        <p id="warn1" class="text-xs text-red-500 mt-1 hidden">
                                            <i class="fa-solid fa-triangle-exclamation mr-1"></i>Melebihi batas 300 kata!
                                        </p>
                                    </div>
                                </div>

                                <div class="flex justify-end gap-3 mt-6 pt-5 border-t border-gray-100">
                                    <button onclick="submit(1)"
                                        class="px-6 py-2.5 rounded-xl bg-green-600 hover:bg-green-700 text-white text-sm font-semibold transition active:scale-95 flex items-center gap-2 shadow-sm">
                                        <i class="fa-solid fa-circle-check"></i>Lapor Selesai
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- TABEL RIWAYAT -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden fade-in-up" style="animation-delay:.10s">

                    <div class="px-5 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <h2 class="font-bold text-gray-800 text-base flex items-center gap-2">
                                <i class="fa-solid fa-list-check text-[#3C8B5E]"></i>
                                Riwayat Pengajuan Lembur
                            </h2>
                            <p class="text-xs text-gray-400 mt-0.5">Daftar seluruh pengajuan yang telah diajukan</p>
                        </div>
                        <div class="flex gap-2 flex-wrap">
                            <select id="filterJenis" onchange="renderRiwayat()"
                                class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-400">
                                <option value="semua">Semua Jenis</option>
                                <option value="lembur">Pengajuan Lembur</option>
                                <option value="selesai">Selesai Lembur</option>
                            </select>
                            <select id="filterValidasi" onchange="renderRiwayat()"
                                class="text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-400">
                                <option value="semua">Semua Status</option>
                                <option value="validated">Sudah Divalidasi</option>
                                <option value="pending">Belum Divalidasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100">
                                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">No</th>
                                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">Tgl Pengajuan</th>
                                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">Jenis</th>
                                    <th class="px-5 py-3 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">Status Validasi</th>
                                </tr>
                            </thead>
                            <tbody id="tabelRiwayat" class="divide-y divide-gray-50"></tbody>
                        </table>
                    </div>

                    <div id="emptyState" class="hidden text-center py-12 text-gray-300">
                        <i class="fa-solid fa-folder-open text-4xl mb-2 block"></i>
                        <p class="text-sm">Belum ada riwayat pengajuan</p>
                    </div>

                    <div class="px-5 py-3 border-t border-gray-50">
                        <p class="text-xs text-gray-400" id="totalInfo"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- MODAL SUKSES -->
    <div id="modalSukses" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-50 flex items-center justify-center">
        <div class="bg-white rounded-2xl shadow-2xl p-8 mx-4 max-w-sm w-full text-center">
            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" id="modalIcon"
                style="background:#dcfce7">
                <i class="fa-solid fa-check text-2xl" style="color:#3C8B5E"></i>
            </div>
            <h3 class="text-lg font-bold text-gray-800 mb-1" id="modalTitle">Pengajuan Terkirim!</h3>
            <p class="text-sm text-gray-500 mb-6" id="modalPesan"></p>
            <button onclick="tutupModal()"
                class="w-full py-3 rounded-xl font-semibold text-white transition active:scale-95" id="modalBtn"
                style="background:#3C8B5E">
                Oke, Mengerti
            </button>
        </div>
    </div>


    <script>
        let activeTab = 0

        let dataRiwayat = [{
                tanggalPengajuan: '2026-04-10',
                jenis: 'lembur',
                validasi: 'validated'
            },
            {
                tanggalPengajuan: '2026-04-12',
                jenis: 'selesai',
                validasi: 'pending'
            },
            {
                tanggalPengajuan: '2026-04-15',
                jenis: 'lembur',
                validasi: 'pending'
            },
            {
                tanggalPengajuan: '2026-04-18',
                jenis: 'selesai',
                validasi: 'validated'
            },
        ]

        /* Tab switch */
        function switchTab(idx) {
            activeTab = idx
            const isLembur = idx === 0

            document.getElementById('tabBtn0').className =
                'px-5 py-2 text-sm font-semibold transition-all duration-300 flex items-center gap-2 border-r border-white/30 ' +
                (isLembur ? 'bg-white text-[#2d6e4a]' : 'text-white hover:bg-white/10')

            document.getElementById('tabBtn1').className =
                'px-5 py-2 text-sm font-semibold transition-all duration-300 flex items-center gap-2 ' +
                (!isLembur ? 'bg-white text-[#2d6e4a]' : 'text-white hover:bg-white/10')

            document.getElementById('slideTrack').style.transform = `translateX(-${idx * 100}%)`
        }

        /* Word count */
        function hitungKata(idx) {
            const text = document.getElementById('ket' + idx).value.trim()
            const words = text === '' ? 0 : text.split(/\s+/).length
            const pct = Math.min((words / 300) * 100, 100)

            document.getElementById('wc' + idx).textContent = words
            document.getElementById('bar' + idx).style.width = pct + '%'

            const baseColor = idx === 0 ? '#3C8B5E' : '#7c3aed'
            const bar = document.getElementById('bar' + idx)
            const warn = document.getElementById('warn' + idx)

            if (words > 300) {
                bar.style.background = '#ef4444'
                warn.classList.remove('hidden')
            } else if (words > 250) {
                bar.style.background = '#f59e0b'
                warn.classList.add('hidden')
            } else {
                bar.style.background = baseColor
                warn.classList.add('hidden')
            }
        }

        /* Reset */
        function resetPanel(idx) {
            ['nim', 'nama', 'noHp', 'email', 'tanggal', 'alamat'].forEach(f => {
                const el = document.getElementById(f + idx)
                if (el) el.value = ''
            })
            document.getElementById('ket' + idx).value = ''
            hitungKata(idx)
        }

        /* Submit */
        function submit(idx) {
            const isLembur = idx === 0
            const now = new Date()
            dataRiwayat.push({
                tanggalPengajuan: now.toISOString().split('T')[0],
                jenis: isLembur ? 'lembur' : 'selesai',
                validasi: 'pending'
            })

            const modal = document.getElementById('modalSukses')
            const icon = document.getElementById('modalIcon')
            const btn = document.getElementById('modalBtn')
            document.getElementById('modalTitle').textContent = isLembur ? 'Pengajuan Terkirim!' : 'Laporan Terkirim!'
            document.getElementById('modalPesan').textContent = isLembur ?
                'Pengajuan lembur kamu berhasil dikirim dan sedang menunggu validasi.' :
                'Laporan selesai lembur kamu berhasil dikirim.'

            if (isLembur) {
                icon.style.background = '#dcfce7'
                icon.innerHTML = '<i class="fa-solid fa-check text-2xl" style="color:#3C8B5E"></i>'
                btn.style.background = '#3C8B5E'
            } else {
                icon.style.background = '#ede9fe'
                icon.innerHTML = '<i class="fa-solid fa-circle-check text-2xl" style="color:#7c3aed"></i>'
                btn.style.background = '#7c3aed'
            }

            modal.classList.remove('hidden')
            renderRiwayat()
        }

        function tutupModal() {
            document.getElementById('modalSukses').classList.add('hidden')
        }

        /* Render riwayat */
        function renderRiwayat() {
            const filterJ = document.getElementById('filterJenis').value
            const filterV = document.getElementById('filterValidasi').value

            const filtered = dataRiwayat.filter(d => {
                const okJ = filterJ === 'semua' || d.jenis === filterJ
                const okV = filterV === 'semua' || d.validasi === filterV
                return okJ && okV
            })

            const tbody = document.getElementById('tabelRiwayat')
            const empty = document.getElementById('emptyState')
            const info = document.getElementById('totalInfo')

            if (filtered.length === 0) {
                tbody.innerHTML = ''
                empty.classList.remove('hidden')
                info.textContent = ''
                return
            }

            empty.classList.add('hidden')
            info.textContent = `Menampilkan ${filtered.length} data`

            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
            tbody.innerHTML = filtered.map((d, i) => {
                const dt = new Date(d.tanggalPengajuan)
                const tgl = `${dt.getDate()} ${months[dt.getMonth()]} ${dt.getFullYear()}`

                const jenisHtml = d.jenis === 'lembur' ?
                    `<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-600">
                       <i class="fa-solid fa-stopwatch text-[10px]"></i>Pengajuan Lembur
                   </span>` :
                    `<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-purple-50 text-purple-600">
                       <i class="fa-solid fa-flag-checkered text-[10px]"></i>Selesai Lembur
                   </span>`

                const valHtml = d.validasi === 'validated' ?
                    `<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-600">
                       <i class="fa-solid fa-check text-[10px]"></i>Sudah Divalidasi
                   </span>` :
                    `<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-600">
                       <i class="fa-solid fa-hourglass-half text-[10px]"></i>Belum Divalidasi
                   </span>`

                return `<tr class="hover:bg-gray-50 transition-colors">
                <td class="px-5 py-3.5 text-gray-500">${i + 1}</td>
                <td class="px-5 py-3.5 text-gray-700">${tgl}</td>
                <td class="px-5 py-3.5">${jenisHtml}</td>
                <td class="px-5 py-3.5">${valHtml}</td>
            </tr>`
            }).join('')
        }

        renderRiwayat()
    </script>

    <script>
        function autoFill() {
            // ambil data dari panel 0
            let nim = document.getElementById("nim0").value;
            let nama = document.getElementById("nama0").value;
            let noHp = document.getElementById("noHp0").value;
            let email = document.getElementById("email0").value;
            let tanggal = document.getElementById("tanggal0").value;
            let alamat = document.getElementById("alamat0").value;

            // isi ke panel 1
            document.getElementById("nim1").value = nim;
            document.getElementById("nama1").value = nama;
            document.getElementById("noHp1").value = noHp;
            document.getElementById("email1").value = email;
            document.getElementById("tanggal1").value = tanggal;
            document.getElementById("alamat1").value = alamat;
        }
    </script>
</body>

</html>
