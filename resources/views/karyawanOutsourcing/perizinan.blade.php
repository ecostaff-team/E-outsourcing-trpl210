<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perizinan Sakit - EcoGreen</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Upload area drag state */
        .drag-over {
            border-color: #3C8B5E !important;
            background-color: #f0fdf4 !important;
        }

        /* File preview card animation */
        @keyframes fadeSlideIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .file-card {
            animation: fadeSlideIn 0.3s ease;
        }

        /* Modal backdrop */
        .modal-backdrop {
            backdrop-filter: blur(4px);
        }

        /* Image preview fit */
        #previewImg {
            max-height: 70vh;
            object-fit: contain;
        }

        /* Status badge */
        .badge-menunggu {
            background: #fef9c3;
            color: #854d0e;
        }

        .badge-disetujui {
            background: #dcfce7;
            color: #166534;
        }

        .badge-ditolak {
            background: #fee2e2;
            color: #991b1b;
        }

        /* Scrollbar thin */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #3C8B5E;
            border-radius: 10px;
        }

        .card-hover {
            transition: all 0.25s ease;
        }

        .card-hover:hover {
            transform: translateY(-2px);
        }

        .btn-press {
            transition: all 0.15s ease;
        }

        .btn-press:active {
            transform: scale(0.96);
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
    </style>
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- SIDEBAR (sama persis dengan halaman utama) -->
        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed md:sticky md:top-0 top-0 left-0 h-screen
            w-[60%] sm:w-[50%] md:w-[19%]
            bg-[#3C8B5E] text-white
            flex flex-col justify-between
            transition-transform duration-300 ease-in-out
            md:translate-x-0 z-50 shadow-2xl">

            <div>
                <div class="text-center px-4 py-6">
                    <h2 class="text-2xl font-bold">EcoGreen</h2>
                    <h3 class="text-lg font-semibold">E-Outsourcing</h3>
                    <p class="text-sm text-white/60">Karyawan Ecogreen</p>
                </div>

                <hr class="border-white/30 mx-4">

                <ul class="mt-6 space-y-2 pl-2">
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                            transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-clock"></i>
                            Absensi
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                            transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-calendar"></i>
                            Jadwal
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                            transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-stopwatch"></i>
                            Pengajuan Lembur
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                            bg-white/20">
                            <i class="fa-solid fa-notes-medical"></i>
                            Perizinan Sakit
                        </a>
                    </li>
                </ul>
            </div>

            <div class="px-4 pb-6">
                <hr class="border-white/30 mb-4">
                <div class="flex items-center gap-3 bg-white/20 p-3 rounded-xl backdrop-blur-md">
                    <div class="bg-white/10 p-2 rounded-xl">R</div>
                    <div>
                        <p class="text-sm font-semibold">Rangga Racing</p>
                        <p class="text-xs text-white/70">rangga@email.com</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- OVERLAY -->
        <div x-show="open" @click="open = false"
            class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40">
        </div>


        <!-- MAIN CONTENT -->
        <div class="flex-1 p-4 md:p-6 max-w-7xl mx-auto">

            <!-- HEADER -->
            <div class="flex items-center justify-between mb-6">
                <button @click="open = !open"
                    class="md:hidden bg-white p-2 rounded-lg shadow transition hover:scale-110 active:scale-95">
                    ☰
                </button>

                <div class="text-center">
                    <h3 class="text-emerald-900 font-bold text-lg md:text-2xl">
                        <img src="/images/logo.png" class="w-8 inline-block ml-2">
                        EcoGreen
                    </h3>
                </div>

                <!-- PROFILE -->
                <div x-data="{ openProfile: false }" class="relative">
                    <div @click="openProfile = !openProfile"
                        class="flex items-center gap-1 bg-white px-2 py-1 rounded-xl shadow
                        cursor-pointer hover:shadow-lg transition md:px-4 md:py-2 md:gap-3">
                        <img src="/images/profile.jpg" class="w-10 h-10 rounded-full object-cover">
                        <div class="hidden md:block">
                            <p class="text-sm font-semibold text-gray-800">Admin Outsourcing</p>
                            <p class="text-xs text-gray-500">Admin</p>
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

            <!-- PAGE TITLE -->
            <div class="mb-6">
                <h1 class="text-xl font-bold text-gray-800 md:text-2xl">
                    Perizinan Sakit <i class="fa-solid fa-notes-medical text-emerald-600 ml-1"></i>
                </h1>
                <p class="text-gray-500 text-sm">Unggah dan kelola surat keterangan sakit kamu di sini</p>
            </div>


            <!-- FORM PENGAJUAN -->
            <div class="bg-white rounded-xl shadow mb-6 border-l-4 border-emerald-500 overflow-hidden">

                <!-- Header Card + Tab Switch -->
                <div class="px-6 pt-5 pb-4 border-b border-gray-100">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                        <h2 class="font-semibold text-gray-800 flex items-center gap-2">
                            <i class="fa-solid fa-file-medical text-emerald-600"></i>
                            Form Pengajuan Izin Sakit
                        </h2>

                        <!-- Tab Switch -->
                        <div class="relative inline-flex bg-[#3C8B5E] rounded-xl p-1 w-full sm:w-auto">
                            <!-- Sliding pill -->
                            <div id="tabPill"
                                class="absolute top-1 left-1 h-[calc(100%-8px)] rounded-lg bg-white shadow-md"
                                style="width:calc(50% - 4px); transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);"></div>

                            <button type="button" id="tabMulai" onclick="switchTab('mulai')"
                                class="relative z-10 flex-1 sm:flex-none flex items-center justify-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold transition-colors duration-200 text-[#3C8B5E]">
                                <i class="fa-solid fa-calendar-day text-xs"></i>
                                Tanggal Mulai
                            </button>
                            <button type="button" id="tabSelesai" onclick="switchTab('selesai')"
                                class="relative z-10 flex-1 sm:flex-none flex items-center justify-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold transition-colors duration-200"
                                style="color: rgba(255,255,255,0.7)">
                                <i class="fa-solid fa-calendar-check text-xs"></i>
                                Tanggal Selesai
                            </button>
                        </div>
                    </div>

                    <!-- Ringkasan tanggal -->
                    <div id="ringkasanTanggal" class="hidden mt-2 flex items-center gap-2 text-xs">
                        <i class="fa-solid fa-arrow-right-long text-emerald-500"></i>
                        <span id="teksRingkasan" class="text-gray-500"></span>
                    </div>
                </div>

                <!-- Slide Viewport -->
                <div class="relative overflow-hidden">

                    <!-- SLIDE 1 — Tanggal Mulai -->
                    <div id="slideCardMulai"
                        style="transition: transform 0.35s cubic-bezier(0.4,0,0.2,1), opacity 0.3s ease;
                               transform: translateX(0); opacity: 1;">
                        <div class="p-6 space-y-4">
                            <div>
                                <label class="text-sm font-semibold text-gray-700 block mb-2">
                                    Tanggal <span class="text-red-500">*</span>
                                </label>
                                <input id="tglMulai" type="date"
                                    class="w-full border border-gray-200 rounded-lg p-3"
                                    onchange="updateRingkasan()">
                            </div>

                            <!-- Keterangan -->
                            <div>
                                <label class="text-sm font-semibold text-gray-700 block mb-1">
                                    Keterangan / Diagnosis<span class="text-red-500">*</span>
                                </label>
                                <textarea id="keterangan" rows="3"
                                    class="w-full border border-gray-200 rounded-lg p-3"></textarea>
                            </div>

                            <!-- Upload Surat -->
                            <div>
                                <label class="text-sm font-semibold text-gray-700 block mb-2">
                                    Upload Surat Sakit<span class="text-red-500">*</span>
                                </label>

                                <div id="dropZone"
                                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer"
                                    onclick="document.getElementById('fileSurat').click()">

                                    Klik atau upload file

                                    <div class="flex flex-col items-center gap-2">

                                    
                                        <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-500"></i>
                                        <p class="text-sm font-medium text-gray-600">Klik atau upload file</p>
                                        <p class="text-xs text-gray-400">JPG, PNG, PDF (Max 5MB)</p>
                                    </div>

                                    <input id="fileSurat" type="file"
                                        accept=".jpg,.jpeg,.png,.pdf"
                                        class="hidden"
                                        onchange="handleFileSelect(this)">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2 — Tanggal Selesai -->
                    <div id="slideCardSelesai"
                        style="position:absolute; top:0; left:0; right:0;
            transition: transform 0.35s cubic-bezier(0.4,0,0.2,1), opacity 0.3s ease;
           transform: translateX(100%); opacity: 0; pointer-events:none;">

                        <div class="p-6 space-y-4">

                            <!-- Tanggal selesai -->
                            <div>
                                <label class="text-sm font-semibold text-gray-700 block mb-2">
                                    Tanggal Selesai<span class="text-red-500">*</span>
                                </label>
                                <input id="tglSelesai" type="date"
                                    class="w-full border border-gray-200 rounded-lg p-3"
                                    onchange="updateRingkasan()">
                            </div>

                            <!-- Upload Ulang -->
                            <div>
                                <label class="text-sm font-semibold text-gray-700 block mb-2">
                                    Upload Ulang Surat Sakit <span class="text-red-500">*</span>
                                </label>

                                <div id="dropZoneUlang"
                                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer"
                                    onclick="document.getElementById('fileSuratUlang').click()">

                                    Klik untuk unggah ulang file

                                    <div class="flex flex-col items-center gap-2">
                                        <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-500"></i>
                                        <p class="text-sm font-medium text-gray-600">Klik atau upload file</p>
                                        <p class="text-xs text-gray-400">JPG, PNG, PDF (Max 5MB)</p>
                                    </div>

                                    <input id="fileSuratUlang" type="file"
                                        accept=".jpg,.jpeg,.png,.pdf"
                                        class="hidden"
                                        onchange="handleFileSelect(this)">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Divider -->
                <div class="border-t border-gray-100 mx-6"></div>

                <!-- Bagian bawah (selalu tampil): Keterangan + Upload + Tombol -->
                <div class="p-6 space-y-4">



                    <!-- SUBMIT -->
                    <div class="flex gap-3 pt-1">
                        <button onclick="submitPerizinan()"
                            class="flex-1 md:flex-none bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white py-3 px-8 rounded-lg font-semibold transition-all duration-200 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i>
                            Kirim Pengajuan
                        </button>
                        <button onclick="resetForm()"
                            class="flex-1 md:flex-none bg-gray-100 hover:bg-gray-200 active:scale-95 text-gray-600 py-3 px-8 rounded-lg font-semibold transition-all duration-200">
                            Reset
                        </button>
                    </div>
                </div>
            </div>


            <!-- RIWAYAT PENGAJUAN -->
            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center justify-between mb-4 flex-wrap gap-2">
                    <h2 class="font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-clock-rotate-left text-emerald-600"></i>
                        Riwayat Pengajuan
                    </h2>

                    <!-- Filter Status -->
                    <select id="filterStatus" onchange="renderRiwayat()"
                        class="border border-gray-200 rounded-lg px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400">
                        <option value="semua">Semua Status</option>
                        <option value="menunggu">Menunggu</option>
                        <option value="disetujui">Disetujui</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>

                <!-- List Riwayat -->
                <div id="listRiwayat" class="space-y-3"></div>

                <!-- Empty State -->
                <div id="emptyState" class="hidden text-center py-12 text-gray-400">
                    <i class="fa-solid fa-folder-open text-4xl mb-3 block"></i>
                    <p class="font-medium">Belum ada pengajuan</p>
                    <p class="text-xs mt-1">Pengajuan yang kamu kirim akan muncul di sini</p>
                </div>
            </div>

        </div>
    </div>


    <!-- ===== MODAL PREVIEW FILE ===== -->
    <div id="modalPreview"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 modal-backdrop p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden">

            <!-- Modal Header -->
            <div class="flex items-center justify-between px-5 py-4 border-b">
                <h3 id="modalTitle" class="font-semibold text-gray-800 truncate pr-4"></h3>
                <button onclick="tutupModal('modalPreview')"
                    class="text-gray-400 hover:text-gray-600 transition text-xl">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-5 flex justify-center bg-gray-50 max-h-[70vh] overflow-auto">
                <img id="previewImg" src="" alt="Preview Surat" class="rounded-lg shadow">
                <div id="previewPdf"
                    class="text-center py-10 text-gray-500 hidden">
                    <i class="fa-solid fa-file-pdf text-red-400 text-5xl mb-3 block"></i>
                    <p class="font-medium">File PDF tidak bisa dipreview langsung</p>
                    <p class="text-sm mt-1">Silakan unduh untuk melihat isinya</p>
                    <a id="downloadLink" href="#" download
                        class="mt-4 inline-block bg-emerald-600 text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-700 transition">
                        <i class="fa-solid fa-download mr-1"></i> Unduh File
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!-- ===== MODAL EDIT PENGAJUAN ===== -->
    <div id="modalEdit"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 modal-backdrop p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">

            <div class="flex items-center justify-between px-5 py-4 border-b">
                <h3 class="font-semibold text-gray-800">Edit Pengajuan</h3>
                <button onclick="tutupModal('modalEdit')"
                    class="text-gray-400 hover:text-gray-600 transition text-xl">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="p-5 space-y-4">

                <input id="editId" type="hidden">

                <div>
                    <label class="text-sm font-semibold text-gray-700 block mb-1">Tanggal</label>
                    <input id="editTglMulai" type="date"
                        class="w-full border border-gray-200 rounded-lg p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-700 block mb-1">Keterangan</label>
                    <textarea id="editKeterangan" rows="3"
                        class="w-full border border-gray-200 rounded-lg p-2.5 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-emerald-400"></textarea>
                </div>

                <!-- Ganti Surat -->
                <div>
                    <label class="text-sm font-semibold text-gray-700 block mb-2">
                        Ganti Surat Sakit
                        <span class="text-gray-400 font-normal text-xs ml-1">(opsional)</span>
                    </label>

                    <!-- Surat Lama -->
                    <div id="suratLamaContainer" class="flex items-center gap-3 bg-gray-50 border border-gray-200 rounded-xl p-3 mb-2">
                        <div id="editPreviewIcon" class="text-2xl w-8 text-center"></div>
                        <div class="flex-1 min-w-0">
                            <p id="editNamaFile" class="text-xs font-semibold text-gray-700 truncate"></p>
                            <p class="text-xs text-gray-400">Surat saat ini</p>
                        </div>
                        <button onclick="document.getElementById('editFileSurat').click()"
                            class="text-emerald-600 text-xs font-semibold hover:underline whitespace-nowrap">
                            <i class="fa-solid fa-arrow-up-from-bracket mr-1"></i>Ganti
                        </button>
                    </div>

                    <input id="editFileSurat" type="file" accept=".jpg,.jpeg,.png,.pdf" class="hidden"
                        onchange="handleEditFileSelect(this)">

                    <!-- New File Preview -->
                    <div id="editFilePreview" class="hidden">
                        <div class="file-card card-hover border border-gray-100 rounded-xl p-4 hover:shadow-md transition-shadow">
                            <div id="editNewPreviewIcon" class="text-2xl w-8 text-center"></div>
                            <div class="flex-1 min-w-0">
                                <p id="editNamaFileBaru" class="text-xs font-semibold text-gray-700 truncate"></p>
                                <p class="text-xs text-gray-400">File baru akan menggantikan surat lama</p>
                            </div>
                            <button onclick="batalGantiSurat()"
                                class="text-red-400 text-xs hover:text-red-600 transition">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 pt-2">
                    <button onclick="simpanEdit()"
                        class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white py-2.5 rounded-lg font-semibold transition-all active:scale-95 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan Perubahan
                    </button>
                    <button onclick="tutupModal('modalEdit')"
                        class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-600 py-2.5 rounded-lg font-semibold transition-all active:scale-95">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- ===== MODAL KONFIRMASI HAPUS ===== -->
    <div id="modalHapus"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 modal-backdrop p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-sm p-6 text-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-triangle-exclamation text-red-500 text-2xl"></i>
            </div>
            <h3 class="font-bold text-gray-800 text-lg mb-2">Hapus Pengajuan?</h3>
            <p class="text-gray-500 text-sm mb-5">Pengajuan yang dihapus tidak dapat dikembalikan.</p>
            <input id="hapusId" type="hidden">
            <div class="flex gap-3">
                <button onclick="konfirmasiHapus()"
                    class="flex-1 bg-red-500 hover:bg-red-600 text-white py-2.5 rounded-lg font-semibold transition-all active:scale-95">
                    Ya, Hapus
                </button>
                <button onclick="tutupModal('modalHapus')"
                    class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-600 py-2.5 rounded-lg font-semibold transition-all active:scale-95">
                    Batal
                </button>
            </div>
        </div>
    </div>


    <!-- ===== TOAST NOTIFIKASI ===== -->
    <div id="toast"
        class="fixed bottom-6 right-6 z-[200] hidden items-center gap-3 bg-white border shadow-xl rounded-xl px-5 py-3 min-w-[250px] transition-all">
        <div id="toastIcon" class="text-xl"></div>
        <p id="toastMsg" class="text-sm font-medium text-gray-700"></p>
    </div>


    <!-- ===== JAVASCRIPT ===== -->
    <script>
        // ============================================================
        // SWITCH TAB TANGGAL
        // ============================================================

        let tabAktif = 'mulai'

        function switchTab(tab) {
            if (tabAktif === tab) return
            tabAktif = tab

            const tabMulai = document.getElementById("tabMulai")
            const tabSelesai = document.getElementById("tabSelesai")
            const panelMulai = document.getElementById("slideCardMulai")
            const panelSelesai = document.getElementById("slideCardSelesai")
            const pill = document.getElementById("tabPill")

            if (tab === 'mulai') {
                // Geser pill ke kiri
                pill.style.transform = "translateX(0)"

                // Warna teks tab
                tabMulai.style.color = "#3C8B5E"
                tabSelesai.style.color = "rgba(255,255,255,0.7)"

                // Slide panel: mulai masuk dari kiri, selesai keluar ke kanan
                panelMulai.style.transform = "translateX(0)"
                panelMulai.style.opacity = "1"
                panelMulai.style.pointerEvents = "auto"

                panelSelesai.style.transform = "translateX(100%)"
                panelSelesai.style.opacity = "0"
                panelSelesai.style.pointerEvents = "none"

            } else {
                // Geser pill ke kanan
                pill.style.transform = "translateX(calc(100% + 0px))"

                // Warna teks tab
                tabSelesai.style.color = "#3C8B5E"
                tabMulai.style.color = "rgba(255,255,255,0.7)"

                // Slide panel: selesai masuk dari kanan, mulai keluar ke kiri
                panelSelesai.style.transform = "translateX(0)"
                panelSelesai.style.opacity = "1"
                panelSelesai.style.pointerEvents = "auto"

                panelMulai.style.transform = "translateX(-100%)"
                panelMulai.style.opacity = "0"
                panelMulai.style.pointerEvents = "none"
            }

            updateRingkasan()
        }

        function updateRingkasan() {
            const mulai = document.getElementById("tglMulai").value
            const selesai = document.getElementById("tglSelesai").value
            const box = document.getElementById("ringkasanTanggal")
            const teks = document.getElementById("teksRingkasan")

            if (mulai && selesai) {
                const diff = Math.round((new Date(selesai) - new Date(mulai)) / 86400000) + 1
                if (diff < 1) {
                    teks.textContent = "⚠️ Tanggal selesai sebelum tanggal mulai"
                    teks.className = "text-red-500"
                } else {
                    teks.textContent = `${formatTglSingkat(mulai)}  →  ${formatTglSingkat(selesai)}  (${diff} hari)`
                    teks.className = "text-gray-500"
                }
                box.classList.remove("hidden")
            } else if (mulai || selesai) {
                teks.textContent = mulai ?
                    `Mulai: ${formatTglSingkat(mulai)} — belum ada tanggal selesai` :
                    `Selesai: ${formatTglSingkat(selesai)} — belum ada tanggal mulai`
                teks.className = "text-gray-400"
                box.classList.remove("hidden")
            } else {
                box.classList.add("hidden")
            }
        }

        function formatTglSingkat(str) {
            if (!str) return "-"
            return new Date(str).toLocaleDateString("id-ID", {
                day: "numeric",
                month: "short",
                year: "numeric"
            })
        }

        // ============================================================
        // DATA STORE (dummy — ganti dengan API call ke backend)
        // ============================================================

        let riwayatData = [{
                id: 1,
                tglMulai: "2026-04-01",
                keterangan: "Demam tinggi dan sakit kepala",
                namaFile: "surat_sakit_april.jpg",
                tipeFile: "image",
                fileData: null,
                status: "disetujui",
                tglPengajuan: "2026-04-01"
            },
            {
                id: 2,
                tglMulai: "2026-03-15",
                keterangan: "Maag kambuh",
                namaFile: "surat_sakit_maret.pdf",
                tipeFile: "pdf",
                fileData: null,
                status: "menunggu",
                tglPengajuan: "2026-03-15"
            },
            {
                id: 3,
                tglMulai: "2026-02-10",
                keterangan: "Flu dan batuk",
                namaFile: "surat_feb.jpg",
                tipeFile: "image",
                fileData: null,
                status: "ditolak",
                tglPengajuan: "2026-02-10"
            }
        ]

        let idCounter = 4
        let fileSelected = null // file yang sedang dipilih di form utama
        let editFileNew = null // file baru saat edit


        // ============================================================
        // RENDER RIWAYAT
        // ============================================================

        function renderRiwayat() {
            const filter = document.getElementById("filterStatus").value
            const container = document.getElementById("listRiwayat")
            const emptyState = document.getElementById("emptyState")

            const filtered = filter === "semua" ?
                riwayatData :
                riwayatData.filter(d => d.status === filter)

            if (filtered.length === 0) {
                container.innerHTML = ""
                emptyState.classList.remove("hidden")
                return
            }

            emptyState.classList.add("hidden")

            container.innerHTML = filtered.map(item => {

                const badgeClass = {
                    menunggu: '<i class="fa-solid fa-hourglass-half mr-1"></i> Menunggu',
                    disetujui: '<i class="fa-solid fa-circle-check mr-1"></i> Disetujui',
                    ditolak: '<i class="fa-solid fa-circle-xmark mr-1"></i> Ditolak'
                } [item.status]

                const badgeLabel = {
                    menunggu: "⏳ Menunggu",
                    disetujui: "✅ Disetujui",
                    ditolak: "❌ Ditolak"
                } [item.status]

                const fileIcon = item.tipeFile === "pdf" ?
                    '<i class="fa-solid fa-file-pdf text-red-500"></i>' :
                    '<i class="fa-solid fa-image text-emerald-500"></i>'

                const canEdit = item.status === "menunggu"

                return `
                    <div class="file-card border border-gray-100 rounded-xl p-4 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between gap-3 flex-wrap">

                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 flex-wrap mb-1">
                                    <span class="font-semibold text-gray-800 text-sm">
                                        ${formatTanggal(item.tglMulai)}
                                        ${item.tglSelesai && item.tglSelesai !== item.tglMulai ? ' — ' + formatTanggal(item.tglSelesai) : ''}
                                    </span>
                                    <span class="text-xs px-2 py-0.5 rounded-full font-medium ${badgeClass}">
                                        ${badgeLabel}
                                    </span>
                                </div>

                                <p class="text-gray-500 text-xs mb-2">Diajukan: ${formatTanggal(item.tglPengajuan)}</p>

                                ${item.keterangan
                                    ? `<p class="text-gray-600 text-sm mb-2">${item.keterangan}</p>`
                                    : ''}

                                <div class="flex items-center gap-2">
                                    <span class="text-sm">${fileIcon}</span>
                                    <span class="text-xs text-gray-500 truncate max-w-[180px]">${item.namaFile}</span>
                                    ${item.fileData
                                        ? `<button onclick="lihatFileRiwayat(${item.id})"
                                                class="text-xs text-emerald-600 hover:underline ml-1">
                                                <i class="fa-solid fa-eye"></i> Lihat
                                            </button>`
                                        : ''}
                                </div>
                            </div>

                            <!-- ACTION BUTTONS -->
                            <div class="flex gap-2 shrink-0">
                                ${canEdit ? `
                                    <button onclick="bukaEdit(${item.id})"
                                        class="text-xs bg-blue-50 text-blue-600 hover:bg-blue-100 px-3 py-1.5 rounded-lg font-medium transition flex items-center gap-1">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </button>
                                ` : ''}
                                ${canEdit ? `
                                    <button onclick="bukaHapus(${item.id})"
                                        class="text-xs bg-red-50 text-red-500 hover:bg-red-100 px-3 py-1.5 rounded-lg font-medium transition flex items-center gap-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                ` : ''}
                            </div>
                        </div>
                    </div>
                `
            }).join("")
        }


        // ============================================================
        // UPLOAD FILE — FORM UTAMA
        // ============================================================

        function handleFileSelect(input) {
            const file = input.files[0]
            if (!file) return
            if (!validasiFile(file)) return
            fileSelected = file
            tampilkanPreview(file)
        }

        function handleDragOver(e) {
            e.preventDefault()
            document.getElementById("dropZone").classList.add("drag-over")
        }

        function handleDragLeave() {
            document.getElementById("dropZone").classList.remove("drag-over")
        }

        function handleDrop(e) {
            e.preventDefault()
            document.getElementById("dropZone").classList.remove("drag-over")
            const file = e.dataTransfer.files[0]
            if (!file) return
            if (!validasiFile(file)) return
            fileSelected = file
            tampilkanPreview(file)
        }

        function tampilkanPreview(file) {
            const isPdf = file.type === "application/pdf"
            document.getElementById("previewIcon").textContent = isPdf ? "🗒️" : "🖼️"
            document.getElementById("namaFile").textContent = file.name
            document.getElementById("ukuranFile").textContent = formatUkuran(file.size)
            document.getElementById("filePreview").classList.remove("hidden")
        }

        function hapusFile() {
            fileSelected = null
            document.getElementById("fileSurat").value = ""
            document.getElementById("filePreview").classList.add("hidden")
        }

        function lihatFile() {
            if (!fileSelected) return
            const isPdf = fileSelected.type === "application/pdf"
            bukaModalPreview(fileSelected.name, isPdf, fileSelected)
        }


        // ============================================================
        // UPLOAD FILE — MODAL EDIT
        // ============================================================

        function handleEditFileSelect(input) {
            const file = input.files[0]
            if (!file) return
            if (!validasiFile(file)) return
            editFileNew = file

            const isPdf = file.type === "application/pdf"
            document.getElementById("editNewPreviewIcon").textContent = isPdf ? "🗒️" : "🖼️"
            document.getElementById("editNamaFileBaru").textContent = file.name
            document.getElementById("editFilePreview").classList.remove("hidden")
        }

        function batalGantiSurat() {
            editFileNew = null
            document.getElementById("editFileSurat").value = ""
            document.getElementById("editFilePreview").classList.add("hidden")
        }


        // ============================================================
        // SUBMIT PENGAJUAN BARU
        // ============================================================

        function submitPerizinan() {
            const btn = document.querySelector('[onclick="submitPerizinan()"]')
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...'
            btn.disabled = true
            btn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Kirim Pengajuan'
            btn.disabled = false
            const tglMulai = document.getElementById("tglMulai").value
            const tglSelesai = document.getElementById("tglSelesai").value
            const keterangan = document.getElementById("keterangan").value.trim()

            if (!tglMulai || !tglSelesai) {
                showToast("error", "Tanggal mulai dan selesai wajib diisi")
                return
            }

            if (new Date(tglSelesai) < new Date(tglMulai)) {
                showToast("error", "Tanggal selesai tidak boleh sebelum tanggal mulai")
                return
            }

            if (!fileSelected) {
                showToast("error", "Surat keterangan sakit wajib diunggah")
                return
            }

            // Baca file sebagai base64 untuk preview
            const reader = new FileReader()
            reader.onload = function(e) {

                const isPdf = fileSelected.type === "application/pdf"

                riwayatData.unshift({
                    id: idCounter++,
                    tglMulai,
                    tglSelesai,
                    keterangan,
                    namaFile: fileSelected.name,
                    tipeFile: isPdf ? "pdf" : "image",
                    fileData: e.target.result,
                    status: "menunggu",
                    tglPengajuan: new Date().toISOString().split("T")[0]
                })

                renderRiwayat()
                resetForm()
                showToast("success", "Pengajuan berhasil dikirim!")
            }

            reader.readAsDataURL(fileSelected)
        }

        function resetForm() {
            document.getElementById("tglMulai").value = ""
            document.getElementById("tglSelesai").value = ""
            document.getElementById("keterangan").value = ""
            document.getElementById("ringkasanTanggal").classList.add("hidden")
            hapusFile()
            switchTab('mulai')
        }


        // ============================================================
        // EDIT PENGAJUAN
        // ============================================================

        function bukaEdit(id) {
            const item = riwayatData.find(d => d.id === id)
            if (!item) return

            editFileNew = null

            document.getElementById("editId").value = id
            document.getElementById("editTglMulai").value = item.tglMulai
            document.getElementById("editKeterangan").value = item.keterangan || ""

            const isPdf = item.tipeFile === "pdf"
            document.getElementById("editPreviewIcon").textContent = isPdf ? "🗒️" : "🖼️"
            document.getElementById("editNamaFile").textContent = item.namaFile
            document.getElementById("editFilePreview").classList.add("hidden")
            document.getElementById("editFileSurat").value = ""

            bukaModal("modalEdit")
        }

        function simpanEdit() {
            const id = parseInt(document.getElementById("editId").value)
            const tglMulai = document.getElementById("editTglMulai").value
            const keterangan = document.getElementById("editKeterangan").value.trim()

            if (!tglMulai) {
                showToast("error", "Tanggal wajib diisi")
                return
            }

            const idx = riwayatData.findIndex(d => d.id === id)
            if (idx === -1) return

            const simpan = () => {
                riwayatData[idx].tglMulai = tglMulai
                riwayatData[idx].keterangan = keterangan
                renderRiwayat()
                tutupModal("modalEdit")
                showToast("success", "Pengajuan berhasil diperbarui!")
            }

            if (editFileNew) {
                const reader = new FileReader()
                reader.onload = function(e) {
                    const isPdf = editFileNew.type === "application/pdf"
                    riwayatData[idx].namaFile = editFileNew.name
                    riwayatData[idx].tipeFile = isPdf ? "pdf" : "image"
                    riwayatData[idx].fileData = e.target.result
                    simpan()
                }
                reader.readAsDataURL(editFileNew)
            } else {
                simpan()
            }
        }


        // ============================================================
        // HAPUS PENGAJUAN
        // ============================================================

        function bukaHapus(id) {
            document.getElementById("hapusId").value = id
            bukaModal("modalHapus")
        }

        function konfirmasiHapus() {
            const id = parseInt(document.getElementById("hapusId").value)
            riwayatData = riwayatData.filter(d => d.id !== id)
            renderRiwayat()
            tutupModal("modalHapus")
            showToast("success", "Pengajuan berhasil dihapus")
        }


        // ============================================================
        // PREVIEW FILE DARI RIWAYAT
        // ============================================================

        function lihatFileRiwayat(id) {
            const item = riwayatData.find(d => d.id === id)
            if (!item || !item.fileData) return
            const isPdf = item.tipeFile === "pdf"
            bukaModalPreviewData(item.namaFile, isPdf, item.fileData)
        }


        // ============================================================
        // MODAL HELPERS
        // ============================================================

        function bukaModalPreview(nama, isPdf, file) {
            document.getElementById("modalTitle").textContent = nama
            const imgEl = document.getElementById("previewImg")
            const pdfEl = document.getElementById("previewPdf")
            const dlLink = document.getElementById("downloadLink")

            if (isPdf) {
                imgEl.classList.add("hidden")
                pdfEl.classList.remove("hidden")
                const url = URL.createObjectURL(file)
                dlLink.href = url
                dlLink.download = nama
            } else {
                pdfEl.classList.add("hidden")
                imgEl.classList.remove("hidden")
                const reader = new FileReader()
                reader.onload = e => {
                    imgEl.src = e.target.result
                }
                reader.readAsDataURL(file)
            }

            bukaModal("modalPreview")
        }

        function bukaModalPreviewData(nama, isPdf, dataUrl) {
            document.getElementById("modalTitle").textContent = nama
            const imgEl = document.getElementById("previewImg")
            const pdfEl = document.getElementById("previewPdf")
            const dlLink = document.getElementById("downloadLink")

            if (isPdf) {
                imgEl.classList.add("hidden")
                pdfEl.classList.remove("hidden")
                dlLink.href = dataUrl
                dlLink.download = nama
            } else {
                pdfEl.classList.add("hidden")
                imgEl.classList.remove("hidden")
                imgEl.src = dataUrl
            }

            bukaModal("modalPreview")
        }

        function bukaModal(id) {
            const el = document.getElementById(id)
            el.classList.remove("hidden")
            el.classList.add("flex")
        }

        function tutupModal(id) {
            const el = document.getElementById(id)
            el.classList.add("hidden")
            el.classList.remove("flex")
        }


        // ============================================================
        // TOAST
        // ============================================================

        let toastTimeout

        function showToast(tipe, pesan) {
            const toast = document.getElementById("toast")
            const toastIcon = document.getElementById("toastIcon")
            const toastMsg = document.getElementById("toastMsg")

            toast.className = `
fixed bottom-6 right-6 z-[200] flex items-center gap-3 px-5 py-3 min-w-[250px]
rounded-xl shadow-xl transition-all
${tipe === "success" 
    ? "bg-emerald-50 border border-emerald-200" 
    : "bg-red-50 border border-red-200"}
`

            toastIcon.innerHTML = tipe === "success" ?
                '<i class="fa-solid fa-circle-check text-emerald-600"></i>' :
                '<i class="fa-solid fa-circle-xmark text-red-500"></i>'
            toastMsg.textContent = pesan

            toast.classList.remove("hidden")
            toast.classList.add("flex")

            clearTimeout(toastTimeout)
            toastTimeout = setTimeout(() => {
                toast.classList.add("hidden")
                toast.classList.remove("flex")
            }, 3000)
        }


        // ============================================================
        // UTILS
        // ============================================================

        function validasiFile(file) {
            const allowed = ["image/jpeg", "image/png", "application/pdf"]
            if (!allowed.includes(file.type)) {
                showToast("error", "Format file tidak didukung (JPG, PNG, PDF)")
                return false
            }
            if (file.size > 5 * 1024 * 1024) {
                showToast("error", "Ukuran file maksimal 5MB")
                return false
            }
            return true
        }

        function formatUkuran(bytes) {
            if (bytes < 1024) return bytes + " B"
            if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + " KB"
            return (bytes / (1024 * 1024)).toFixed(1) + " MB"
        }

        function formatTanggal(str) {
            if (!str) return "-"
            const d = new Date(str)
            return d.toLocaleDateString("id-ID", {
                day: "numeric",
                month: "long",
                year: "numeric"
            })
        }

        function hitungDurasi(tglMulai, tglSelesai) {
            const a = new Date(tglMulai)
            const b = new Date(tglSelesai)
            const hari = Math.round((b - a) / (1000 * 60 * 60 * 24)) + 1
            return hari === 1 ? "1 hari" : hari + " hari"
        }


        // ============================================================
        // INIT
        // ============================================================

        window.addEventListener("load", function() {
            renderRiwayat()
        })
    </script>

</body>

</html>