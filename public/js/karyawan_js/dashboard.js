let sudahMasuk = false
let sudahKeluar = false
let tipeAbsensi = null
let jadwalDipilih = null
let lokasi = null

// 🔥 MAP CONFIG
const kantor = {
    /* lat: 1.0652718115917437,
    lng: 104.1336049809529 */

    /* politeknik negeri batam */
    lat: 1.118838493578187,
    lng: 104.0484029502701
}

const radiusKantor = 200

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
window.addEventListener("load", function () {

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

