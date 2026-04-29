@extends('layouts.karyawanOutsourcing')

@section('content')
    <!-- CONTENT -->
    <div class="flex-1 p-4 md:p-6 max-w-7xl mx-auto">
        {{-- Card yang menampilkan jadwal karyawan pada hari ini --}}
        <div
            class="bg-linear-to-br from-white to-gray-50 rounded-3xl shadow-md p-6 mb-6 border border-gray-100 relative overflow-hidden">
            <!-- subtle background accent -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-100 rounded-full blur-3xl opacity-30"></div>

            <!-- Bagian header atau judul dari card-->
            <div class="flex items-center justify-between mb-5 relative z-10">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-blue-500/10 text-blue-600 flex items-center justify-center rounded-xl shadow-inner">
                        <i class="fa fa-calendar text-sm"></i>
                    </div>
                    <div>
                        <h2 class="font-semibold text-gray-800 leading-tight">Jadwal Hari Ini</h2>
                        <p class="text-xs text-gray-400">Aktivitas kamu hari ini</p>
                    </div>
                </div>

                {{-- bagian info shift --}}>
                <span class="text-xs bg-blue-100 text-blue-600 px-3 py-1 rounded-full font-medium">
                    1 Shift
                </span>
            </div>

            <!-- CARD -->
            <div
                class="group p-5 rounded-2xl border border-gray-100 bg-white/80 backdrop-blur-sm
                hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer relative overflow-hidden">

                <!-- hover glow -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition">
                </div>

                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <h3 class="font-semibold text-gray-800 text-base">Shift Pagi</h3>
                        <p class="text-sm text-gray-500 mt-1">08:00 - 17:00</p>
                    </div>

                    <!-- time badge -->
                    <div class="text-xs bg-green-100 text-green-600 px-3 py-1 rounded-full font-medium">
                        Aktif
                    </div>
                </div>
            </div>

        </div>

        {{-- menampilkan status absensi masuk dan absensi keluar --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">

            <!-- card absensi masuk -->
            <div
                class="group relative bg-linear-to-br from-white to-emerald-50/40 p-5 rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">

                <!-- glow -->
                <div class="absolute -top-10 -right-10 w-28 h-28 bg-emerald-200 opacity-20 blur-3xl"></div>

                <div class="relative z-10 flex items-start justify-between mb-4">
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wide">Absen Masuk</p>
                        <p id="tanggalMasuk" class="font-semibold text-gray-800 text-sm mt-1"></p>
                    </div>

                    <div
                        class="w-11 h-11 bg-emerald-100 text-emerald-600 flex items-center justify-center rounded-2xl shadow-inner group-hover:scale-105 transition">
                        <i class="fas fa-sign-in-alt text-sm"></i>
                    </div>
                </div>

                <!-- STATUS -->
                <div class="flex items-center justify-between">
                    <p id="statusMasuk" class="text-sm text-gray-400">
                        Belum absen masuk hari ini
                    </p>

                    <!-- badge -->
                    <span class="text-[11px] bg-gray-100 text-gray-500 px-3 py-1 rounded-full font-medium">
                        Pending
                    </span>
                </div>

                <!-- bottom accent -->
                <div class="absolute bottom-0 left-0 h-1 w-0 bg-emerald-500 group-hover:w-full transition-all duration-300">
                </div>
            </div>


            <!-- card absensi keluar -->
            <div
                class="group relative bg-linear-to-br from-white to-red-50/40 p-5 rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">

                <!-- glow -->
                <div class="absolute -top-10 -right-10 w-28 h-28 bg-red-200 opacity-20 blur-3xl"></div>

                <div class="relative z-10 flex items-start justify-between mb-4">
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wide">Absen Keluar</p>
                        <p id="tanggalKeluar" class="font-semibold text-gray-800 text-sm mt-1"></p>
                    </div>

                    <div
                        class="w-11 h-11 bg-red-100 text-red-600 flex items-center justify-center rounded-2xl shadow-inner group-hover:scale-105 transition">
                        <i class="fas fa-sign-out-alt text-sm"></i>
                    </div>
                </div>

                <!-- STATUS -->
                <div class="flex items-center justify-between">
                    <p id="statusKeluar" class="text-sm text-gray-400">
                        Belum absen keluar hari ini
                    </p>

                    <!-- badge -->
                    <span class="text-[11px] bg-gray-100 text-gray-500 px-3 py-1 rounded-full font-medium">
                        Pending
                    </span>
                </div>

                <!-- bottom accent -->
                <div class="absolute bottom-0 left-0 h-1 w-0 bg-red-500 group-hover:w-full transition-all duration-300">
                </div>
            </div>

        </div>


        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">

            <h2 class="font-semibold text-gray-800">Form Absensi</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
                <button id="btnMasuk" onclick="absenMasuk()" class="flex-1 bg-emerald-600 text-white py-2 rounded-lg">Absen
                    Masuk</button>
                <button id="btnKeluar" onclick="absenKeluar()" class="flex-1 bg-gray-100 py-2 rounded-lg">Absen
                    Keluar</button>

            </div>

            <div>
                <label class="text-sm font-semibold text-gray-600">Waktu</label>
                <input id="waktu" type="text" class="w-full border rounded-xl p-3 mt-1" readonly>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-600">Lokasi GPS</label>
                <div id="map" class="w-full h-52 rounded-xl mt-1"></div>
            </div>

            <button onclick="simpanAbsensi()" class="w-full bg-emerald-600 text-white py-3 rounded-xl font-semibold">
                Simpan Absensi
            </button>

        </div>

        <!-- GRAFIK -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 mt-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="font-semibold text-gray-800">Rekap Kehadiran</h2>
                <select class="border rounded-lg px-3 py-1 text-sm">
                    <option>2026</option>
                    <option>2025</option>
                </select>
            </div>

            <div class="w-full overflow-x-auto">
                <div class="min-w-200 h-100">
                    <canvas id="grafikAbsensi"></canvas>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/karyawan_js/dashboard.js') }}"></script>
@endsection
