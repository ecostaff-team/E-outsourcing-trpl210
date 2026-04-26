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
        <x-sidebar :menus="[
            ['title' => 'Absensi', 'icon' => 'fas fa-home', 'ref' => '/karyawanOutsourcing/dahsboard'],
            ['title' => 'Jadwalku', 'icon' => 'fas fa-users', 'ref' => '/karyawanOutsourcing/jadwal-karyawan'],
            [
                'title' => 'Pengajuan Lembur',
                'icon' => 'fas fa-users',
                'ref' => '/karyawanOutsourcing/pengajuanKaryawan',
            ],
            ['title' => 'Perizinan Sakit', 'icon' => 'fas fa-cog', 'ref' => '#'],
        ]">kepala-departemen</x-sidebar>

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
                        <div class="min-w-[500px] md:min-w-full h-[250px] md:h-[300px]">
                            <canvas id="grafikAbsensi"></canvas>
                        </div>
                    </div>

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
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top'
                            }
                        },
                        scales: {
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
