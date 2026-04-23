            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Absensi Karyawan</title>

                <link rel="icon" type="image/x-icon" href="/images/logo.png">

                <!-- Tailwind -->
                <script src="https://cdn.tailwindcss.com"></script>

                <!-- Alpine JS -->
                <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
                <!-- Leaflet Map -->
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <style>
                    #map {
                        z-index: 1;
                    }
                </style>
            </head>


            <body x-data="{ open: false }" class="bg-gray-100">

                <div class="flex min-h-screen">


                    <!-- 🔥 SIDEBAR -->
                    <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
                        class="fixed md:sticky md:top-0 top-0 left-0 h-screen
                    w-[60%] sm:w-[50%] md:w-[19%]
                    bg-[#3C8B5E] text-white
                    flex flex-col justify-between
                    transition-transform duration-300 ease-in-out
                    md:translate-x-0 z-50 shadow-2xl">

                        <!-- HEADER -->
                        <div>
                            <div class="text-center px-4 py-6">
                                <h2 class="text-2xl font-bold">EcoGreen</h2>
                                <h3 class="text-lg font-semibold">E-Outsourcing</h3>
                                <p class="text-sm text-white/60">Karyawan Ecogreen</p>
                            </div>

                            <hr class="border-white/30 mx-4">

                            <!-- MENU -->
                            <ul class="mt-6 space-y-2 pl-2">

                                <li>
                                    <a href="#"
                                        class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                                    bg-white/20">
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
                                    transition-all duration-300 hover:bg-white/20 hover:pl-6">
                                        <i class="fa-solid fa-notes-medical"></i>
                                        Perizinan Sakit
                                    </a>
                                </li>

                            </ul>
                        </div>


                        <!-- FOOTER PROFILE -->
                        <div class="px-4 pb-6">
                            <hr class="border-white/30 mb-4">

                            <div class="flex items-center gap-3 bg-white/20 p-3 rounded-xl backdrop-blur-md">

                                <div class="bg-white/10 p-2 rounded-xl">
                                    R
                                </div>

                                <div>
                                    <p class="text-sm font-semibold">Rangga Racing</p>
                                    <p class="text-xs text-white/70">rangga@email.com</p>
                                </div>
                            </div>
                        </div>
                    </aside>


                    <!-- 🌫️ OVERLAY -->
                    <div x-show="open" @click="open = false"
                        class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40">
                    </div>



                    <!-- CONTENT -->
                    <div class="flex-1 p-6">


                        <!-- HEADER -->
                        <div class="flex items-center justify-between mb-6">

                            <button @click="open = !open"
                                class="top-4 left-4 md:hidden bg-white p-2 rounded-lg shadow
            transition hover:scale-110 active:scale-95">
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
                                        <p class="text-sm font-semibold text-gray-800">
                                            Admin Outsourcing
                                        </p>

                                        <p class="text-xs text-gray-500">
                                            Admin
                                        </p>
                                    </div>

                                    <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition md:text-sm"
                                        :class="openProfile ? 'rotate-180' : ''"></i>

                                </div>


                                <!-- DROPDOWN -->
                                <div x-show="openProfile" @click.outside="openProfile = false" x-transition
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg overflow-hidden z-50">

                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        👤 Profile
                                    </a>

                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        🔒 Ganti Password
                                    </a>

                                    <hr>

                                    <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-50">
                                        🚪 Logout
                                    </a>

                                </div>
                            </div>
                        </div>



                        <!-- SELAMAT DATANG -->
                        <div class="mb-6">
                            <h1 class="text-xl font-bold text-gray-800 md:text-2xl">
                                Selamat Datang, Admin Outsourcing 👋
                            </h1>

                            <p class="text-gray-500 text-sm">
                                Semoga harimu produktif dan menyenangkan
                            </p>
                        </div>



                        <!-- ABSENSI CONTENT -->

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


                        <div class="grid md:grid-cols-2 gap-4 mb-6">

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

                            <div class="flex gap-3 mb-4">

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

                                <div id="map" class="w-full h-56 bg-gray-200 rounded-lg">
                                </div>

                            </div>


                            <button onclick="simpanAbsensi()"
                                class="w-full bg-emerald-600 text-white py-3 rounded-lg font-semibold">
                                Simpan Absensi
                            </button>

                            <div class="bg-white rounded-xl shadow p-6 mt-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="font-semibold">
                                        Rekap Kehadiran Pribadi
                                    </h2>

                                    <select class="border rounded-lg px-3 py-1 text-sm">
                                        <option>2026</option>
                                        <option>2025</option>
                                    </select>
                                </div>

                                <canvas id="grafikAbsensi" height="100"></canvas>
                            </div>




                        </div>

                    </div>




                    <script>
                        let sudahMasuk = false
                        let sudahKeluar = false
                        let tipeAbsensi = null
                        let jadwalDipilih = null
                        let lokasi = null

                        // 🔥 MAP CONFIG
                        const kantor = {
                            lat: 1.134658,
                            lng: 104.053451
                        }

                        const radiusKantor = 100

                        let map
                        let markerUser
                        let circle

                        function pilihJadwal(nama, masuk, keluar) {

                            jadwalDipilih = {
                                nama,
                                masuk,
                                keluar
                            }

                            // reset semua
                            document.querySelectorAll("#jadwalContainer div")
                                .forEach(el => el.classList.remove("border-emerald-500", "border-2"))

                            event.currentTarget.classList.add("border-emerald-500", "border-2")

                        }


                        function absenMasuk() {

                            if (!jadwalDipilih) {
                                alert("Pilih jadwal dulu")
                                return
                            }

                            tipeAbsensi = "masuk"

                            document.getElementById("statusMasuk")
                                .innerHTML = "⏳ Mengambil Lokasi..."

                            getLokasi()

                        }

                        function absenKeluar() {

                            if (!jadwalDipilih) {
                                alert("Pilih jadwal dulu")
                                return
                            }

                            tipeAbsensi = "keluar"

                            document.getElementById("statusKeluar")
                                .innerHTML = "⏳ Mengambil Lokasi..."

                            getLokasi()

                        }


                        function getLokasi() {

                            // Random lokasi sekitar kantor (dummy)
                            const dalamRadius = Math.random() > 0.5

                            if (dalamRadius) {

                                // Dalam radius (berhasil)
                                lokasi = {
                                    lat: kantor.lat,
                                    lng: kantor.lng
                                }

                            } else {

                                // Diluar radius (gagal)
                                lokasi = {
                                    lat: kantor.lat + 0.002,
                                    lng: kantor.lng + 0.002
                                }

                            }


                            // Marker User
                            if (markerUser) {
                                map.removeLayer(markerUser)
                            }

                            markerUser = L.marker([lokasi.lat, lokasi.lng])
                                .addTo(map)
                                .bindPopup("Lokasi Dummy")
                                .openPopup()

                            map.setView([lokasi.lat, lokasi.lng], 17)

                        }

                        function simpanAbsensi() {

                            if (!lokasi) {
                                alert("Lokasi belum diambil")
                                return
                            }

                            cekRadius()

                        }


                        function updateJam() {

                            const now = new Date()

                            document.getElementById("waktu").value =
                                now.toLocaleTimeString()

                        }

                        updateJam()
                        setInterval(updateJam, 1000)





                        function initMap() {

                            map = L.map('map').setView([1.134658, 104.053451], 17)

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 19
                            }).addTo(map)


                            // Marker Kantor
                            L.marker([kantor.lat, kantor.lng])
                                .addTo(map)
                                .bindPopup("Lokasi Kantor")
                                .openPopup()


                            // Radius Kantor
                            circle = L.circle([kantor.lat, kantor.lng], {
                                color: 'green',
                                fillColor: '#22c55e',
                                fillOpacity: 0.2,
                                radius: radiusKantor
                            }).addTo(map)

                        }

                        function cekRadius() {

                            const jarak = map.distance(
                                [lokasi.lat, lokasi.lng],
                                [kantor.lat, kantor.lng]
                            )

                            console.log("Jarak:", jarak)

                            if (jarak <= radiusKantor) {

                                if (tipeAbsensi == "masuk") {

                                    sudahMasuk = true

                                    document.getElementById("statusMasuk")
                                        .innerHTML = "✅ Sudah Absen Masuk"

                                }

                                if (tipeAbsensi == "keluar") {

                                    sudahKeluar = true

                                    document.getElementById("statusKeluar")
                                        .innerHTML = "✅ Sudah Absen Keluar"

                                    alert("Absen Keluar Berhasil")

                                }

                            } else {

                                alert("❌ Anda di luar area kantor")

                                if (tipeAbsensi == "masuk") {

                                    document.getElementById("statusMasuk")
                                        .innerHTML = "❌ Diluar Area Kantor"

                                }

                                if (tipeAbsensi == "keluar") {

                                    document.getElementById("statusKeluar")
                                        .innerHTML = "❌ Diluar Area Kantor"

                                }

                            }

                        }
                        window.addEventListener("load", function() {

                            setTimeout(() => {

                                initMap()
                                loadGrafik()

                            }, 300)

                        })

                        function updateTanggal() {

                            const now = new Date()

                            const tanggal =
                                now.toLocaleDateString('id-ID', {
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric'
                                })

                            document.getElementById("tanggalMasuk")
                                .innerHTML = "ABSEN MASUK — " + tanggal

                            document.getElementById("tanggalKeluar")
                                .innerHTML = "ABSEN KELUAR — " + tanggal

                        }

                        updateTanggal()
                    </script>
                    <script>
                        let chartInstance = null

                        function loadGrafik() {

                            const ctx = document.getElementById('grafikAbsensi').getContext('2d')

                            if (chartInstance) {
                                chartInstance.destroy()
                            }

                            const bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"]

                            const hadir = [20, 18, 22, 19, 21, 20, 23, 22, 21, 19, 20, 22]
                            const alpha = [2, 3, 1, 2, 1, 2, 0, 1, 1, 2, 1, 1]
                            const izin = [1, 2, 2, 1, 2, 1, 1, 2, 1, 1, 2, 1]
                            const lembur = [5, 4, 6, 3, 5, 4, 6, 5, 4, 3, 4, 5]

                            chartInstance = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: bulan,
                                    datasets: [{
                                            label: 'Hadir',
                                            data: hadir,
                                            backgroundColor: '#22c55e'
                                        },
                                        {
                                            label: 'Alpha',
                                            data: alpha,
                                            backgroundColor: '#ef4444'
                                        },
                                        {
                                            label: 'Izin/Sakit',
                                            data: izin,
                                            backgroundColor: '#facc15'
                                        },
                                        {
                                            label: 'Lembur',
                                            data: lembur,
                                            backgroundColor: '#a855f7'
                                        }
                                    ]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            position: 'top'
                                        }
                                    },
                                    scales: {
                                        x: {
                                            stacked: false
                                        },
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            })
                        }
                    </script>
            </body>

            </html>
