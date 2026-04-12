<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapan Detail Karyawan</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex">
        {{-- SIDEBAR --}}
        @include('components.sidebar_admin_out')
        <div class="flex-1 p-6 ml-0">

            <!-- HEADER CONTENT -->
            @include('components.header_admin_out')
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 mt-6">
                <x-hr.hr-stat-card title="Karyawan OS Aktif" value="5" subtext="dari 87 terdaftar" icon="fas fa-users"
                    borderColor="border-green-500" textColor="text-green-500"></x-hr.hr-stat-card>
                <x-hr.hr-stat-card title="Total Menit Lembur" value="870" subtext="Bulan Maret 2025" icon="fas fa-clock"
                    borderColor="border-orange-400" textColor="text-orange-500"></x-hr.hr-stat-card>
                <x-hr.hr-stat-card title="Ajuan Rekap Pending" value="2" subtext="Menunggu persetujuan"
                    icon="fas fa-clipboard-list" borderColor="border-indigo-500"
                    textColor="text-indigo-600"></x-hr.hr-stat-card>
            </div>


            <div class="bg-white p-8 rounded-lg shadow-lg mt-6">
                <div class="flex flex-col md:flex-row md:justify-between gap-3">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="far fa-calendar text-2xl md:text-1xl text-gray-900"></i>
                        <h2 class="text-lg md:text-xl font-bold text-gray-900">Rekapan Detail Karyawan per Bulan</h2>
                    </div>

                </div>

                <div class="overflow-x-auto">
                    <x-hr.tabel-rekapan-detail-karyawan></x-hr.tabel-rekapan-detail-karyawan>
                </div>

                <div class="flex justify-end mt-4 gap-1 text-sm">
                    <button class="px-3 py-1 border rounded">Previous</button>
                    <button class="px-3 py-1 bg-green-600 text-white rounded">1</button>
                    <button class="px-3 py-1 border rounded">2</button>
                    <button class="px-3 py-1 border rounded">3</button>
                    <button class="px-3 py-1 border rounded">Next</button>
                </div>
            </div>


            {{-- SELESAI CONTENT --}}
        </div>

    </div>

</body>

</html>
