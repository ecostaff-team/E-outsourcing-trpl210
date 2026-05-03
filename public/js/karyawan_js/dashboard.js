let sudahMasuk = false
let sudahKeluar = false
let tipeAbsensi = null
let lokasi = null

// 🔥 MAP CONFIG
const kantor = {
    /* lat: 1.0652718115917437,
    lng: 104.1336049809529 */

    /* politeknik negeri batam */

    lat: 1.1508969,
    lng: 104.0439572

}

const radiusKantor = 200

let map
let markerUser
let circle





function absenMasuk() {


    tipeAbsensi = "masuk"

    setActiveButton("masuk")

    document.getElementById("statusMasuk").innerHTML =
        "Klik simpan untuk absen masuk"
}

function absenKeluar() {

    tipeAbsensi = "keluar"

    setActiveButton("keluar")

    document.getElementById("statusKeluar").innerHTML =
        "Klik simpan untuk absen keluar"
}





function simpanAbsensi() {

    if (tipeAbsensi === "masuk" && sudahMasuk) {
    alert("Sudah absen masuk")
    return
}

if (tipeAbsensi === "keluar" && sudahKeluar) {
    alert("Sudah absen keluar")
    return
}

    if (!tipeAbsensi) {
        alert("Pilih absen masuk atau keluar dulu")
        return
    }

    if (!navigator.geolocation) {
        alert("GPS tidak didukung")
        return
    }

    navigator.geolocation.getCurrentPosition((pos) => {

        lokasi = {
            lat: pos.coords.latitude,
            lng: pos.coords.longitude
        }

        updateMapUser()

        const jarak = map.distance(
            [lokasi.lat, lokasi.lng],
            [kantor.lat, kantor.lng]
        )

        if (jarak > radiusKantor) {

            alert("Diluar area kantor")

            if (tipeAbsensi === "masuk") {
                document.getElementById("statusMasuk").innerHTML = "Diluar area"
            }

            if (tipeAbsensi === "keluar") {
                document.getElementById("statusKeluar").innerHTML = "Diluar area"
            }

            return
        }

        if (tipeAbsensi === "masuk") {

    sudahMasuk = true

    document.getElementById("statusMasuk").innerHTML =
        "Sudah absen masuk (" + document.getElementById("waktu").value + ")"

    tipeAbsensi = null
}

        if (tipeAbsensi === "keluar") {

    if (!sudahMasuk) {
        alert("Absen masuk dulu")
        return
    }

    sudahKeluar = true

    document.getElementById("statusKeluar").innerHTML =
        "Sudah absen keluar (" + document.getElementById("waktu").value + ")"

    tipeAbsensi = null

    setActiveButton(null)
}

    }, () => {
        alert("Gagal ambil lokasi")
    }, {
        enableHighAccuracy: true
    })
}


function setActiveButton(tipe = null) {

    const btnMasuk = document.getElementById("btnMasuk")
    const btnKeluar = document.getElementById("btnKeluar")

    // reset
    btnMasuk.classList.remove("bg-emerald-600", "text-white")
    btnKeluar.classList.remove("bg-emerald-600", "text-white")


    btnMasuk.classList.add("bg-gray-100", "text-gray-700")
    btnKeluar.classList.add("bg-gray-100", "text-gray-700")

    if (!tipe) return

    if (tipe === "masuk") {
        btnMasuk.classList.remove("bg-gray-100", "text-gray-700")
        btnMasuk.classList.add("bg-emerald-600", "text-white")
    }

    if (tipe === "keluar") {
        btnKeluar.classList.remove("bg-gray-100", "text-gray-700")
        btnKeluar.classList.add("bg-emerald-600", "text-white")
    }


}

function updateMapUser() {

    if (markerUser) {
        map.removeLayer(markerUser)
    }

    markerUser = L.marker([lokasi.lat, lokasi.lng])
        .addTo(map)
        .bindPopup("Lokasi Anda")
        .openPopup()

    map.setView([lokasi.lat, lokasi.lng], 17)
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

function ambilLokasi() {
    const info = document.getElementById('infoLokasi');

    navigator.geolocation.getCurrentPosition(
        (pos) => {
            const lat = pos.coords.latitude;
            const lng = pos.coords.longitude;

            info.innerText = `Lat: ${lat.toFixed(5)}, Lng: ${lng.toFixed(5)}`;
        },
        (err) => {
            switch(err.code) {
                case err.PERMISSION_DENIED:
                    info.innerText = "Izin lokasi ditolak ";
                    break;
                case err.POSITION_UNAVAILABLE:
                    info.innerText = "Lokasi tidak tersedia";
                    break;
                case err.TIMEOUT:
                    info.innerText = "Mengambil lokasi terlalu lama ";
                    break;
                default:
                    info.innerText = "Gagal mengambil lokasi";
            }
        }
    );
}


