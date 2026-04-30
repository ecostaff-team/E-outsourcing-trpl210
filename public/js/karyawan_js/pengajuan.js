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


