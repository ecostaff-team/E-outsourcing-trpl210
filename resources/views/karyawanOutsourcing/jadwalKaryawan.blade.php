<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Karyawan - EcoGreen</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex min-h-screen">

        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed md:sticky md:top-0 top-0 left-0 h-screen w-[60%] sm:w-[50%] md:w-[19%] bg-[#3C8B5E] text-white flex flex-col justify-between transition-transform duration-300 ease-in-out md:translate-x-0 z-50 shadow-2xl">

            <div>
                <div class="text-center px-4 py-6">
                    <h2 class="text-2xl font-bold">EcoGreen</h2>
                    <h3 class="text-lg font-semibold">E-Outsourcing</h3>
                    <p class="text-sm text-white/60">Karyawan Ecogreen</p>
                </div>

                <hr class="border-white/30 mx-4">

                <ul class="mt-6 space-y-2 pl-2">
                    <li>
                        <a href="#" class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-clock"></i>
                            Absensi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl bg-white/20 shadow-inner">
                            <i class="fa-solid fa-calendar"></i>
                            Jadwal
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-stopwatch"></i>
                            Pengajuan Lembur
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-notes-medical"></i>
                            Perizinan Sakit
                        </a>
                    </li>
                </ul>
            </div>

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

        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>

        <div class="flex-1 p-4 md:p-6 overflow-x-hidden">

            <div class="flex items-center justify-between mb-6">
                <button @click="open = !open" class="top-4 left-4 md:hidden bg-white p-2 rounded-lg shadow transition hover:scale-110 active:scale-95">
                    ☰
                </button>

                <div class="text-center">
                    <h3 class="text-emerald-900 font-bold text-lg md:text-2xl">
                        <img src="/images/logo.png" class="w-8 inline-block ml-2" alt="">
                        EcoGreen
                    </h3>
                </div>

                <div x-data="{ openProfile: false }" class="relative">
                    <div @click="openProfile = !openProfile" class="flex items-center gap-1 bg-white px-2 py-1 rounded-xl shadow cursor-pointer hover:shadow-lg transition md:px-4 md:py-2 md:gap-3">
                        <img src="/images/profile.jpg" class="w-10 h-10 rounded-full object-cover" alt="">
                        <div class="hidden md:block">
                            <p class="text-sm font-semibold text-gray-800">Admin Outsourcing</p>
                            <p class="text-xs text-gray-500">Admin</p>
                        </div>
                        <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition md:text-sm" :class="openProfile ? 'rotate-180' : ''"></i>
                    </div>

                    <div x-show="openProfile" @click.outside="openProfile = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg overflow-hidden z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">👤 Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">🔒 Ganti Password</a>
                        <hr>
                        <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-50">🚪 Logout</a>
                    </div>
                </div>
            </div>

            <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-xl font-bold text-gray-800 md:text-2xl">Jadwal Shift Karyawan 🗓️</h1>
                    <p class="text-gray-500 text-sm">Kelola dan pantau jadwal kerja karyawan bulan ini.</p>
                </div>
                <button class="bg-[#3C8B5E] text-white px-4 py-2 rounded-lg font-medium shadow hover:bg-emerald-700 transition">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Jadwal
                </button>
            </div>

            <div class="bg-white rounded-xl shadow p-4 md:p-6 overflow-hidden">

                <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 border-b pb-4">
                    <div class="flex items-center gap-4">
                        <button class="p-2 border rounded-lg hover:bg-gray-100 transition"><i class="fa-solid fa-chevron-left text-gray-600"></i></button>
                        <h2 class="text-xl font-bold text-gray-800 w-32 text-center">April 2026</h2>
                        <button class="p-2 border rounded-lg hover:bg-gray-100 transition"><i class="fa-solid fa-chevron-right text-gray-600"></i></button>
                    </div>

                    <div class="flex gap-2">
                        <select class="border rounded-lg px-3 py-2 text-sm bg-gray-50 outline-none focus:ring-2 focus:ring-emerald-500">
                            <option>Semua Lokasi</option>
                            <option>PT. Maju Bersama</option>
                            <option>PT. Cipta Karya</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-[700px]">

                        <div class="grid grid-cols-7 gap-2 mb-2 text-center">
                            <div class="font-bold text-sm text-gray-500 py-2">Senin</div>
                            <div class="font-bold text-sm text-gray-500 py-2">Selasa</div>
                            <div class="font-bold text-sm text-gray-500 py-2">Rabu</div>
                            <div class="font-bold text-sm text-gray-500 py-2">Kamis</div>
                            <div class="font-bold text-sm text-gray-500 py-2">Jumat</div>
                            <div class="font-bold text-sm text-red-500 py-2">Sabtu</div>
                            <div class="font-bold text-sm text-red-500 py-2">Minggu</div>
                        </div>

                        <div class="grid grid-cols-7 gap-2">

                            <div class="border rounded-lg min-h-[100px] p-2 bg-gray-50 border-gray-100">
                                <p class="text-right text-sm text-gray-400 font-medium mb-1">30</p>
                            </div>
                            <div class="border rounded-lg min-h-[100px] p-2 bg-gray-50 border-gray-100">
                                <p class="text-right text-sm text-gray-400 font-medium mb-1">31</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg min-h-[100px] p-2 bg-white hover:border-emerald-500 transition cursor-pointer group">
                                <p class="text-right text-sm text-gray-700 font-bold mb-1">1</p>
                                <div class="bg-emerald-100 text-emerald-700 text-[11px] font-semibold p-1 rounded text-center truncate mb-1">
                                    🌞 Pagi (08-17)
                                </div>
                                <div class="text-[10px] text-gray-500 truncate text-center">
                                    <i class="fa-solid fa-location-dot"></i> PT. Maju
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg min-h-[100px] p-2 bg-white hover:border-blue-500 transition cursor-pointer group">
                                <p class="text-right text-sm text-gray-700 font-bold mb-1">2</p>
                                <div class="bg-blue-100 text-blue-700 text-[11px] font-semibold p-1 rounded text-center truncate mb-1">
                                    🌙 Malam (20-05)
                                </div>
                                <div class="text-[10px] text-gray-500 truncate text-center">
                                    <i class="fa-solid fa-location-dot"></i> PT. Cipta
                                </div>
                            </div>

                            <div class="border border-red-200 rounded-lg min-h-[100px] p-2 bg-red-50 hover:border-red-400 transition cursor-pointer">
                                <p class="text-right text-sm text-red-600 font-bold mb-1">3</p>
                                <div class="bg-red-200 text-red-800 text-[11px] font-semibold p-1 rounded text-center truncate">
                                    🛋️ OFF
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg min-h-[100px] p-2 bg-white hover:border-gray-400 transition cursor-pointer">
                                <p class="text-right text-sm text-gray-700 font-bold mb-1">4</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg min-h-[100px] p-2 bg-white hover:border-gray-400 transition cursor-pointer">
                                <p class="text-right text-sm text-gray-700 font-bold mb-1">5</p>
                            </div>

                            <script>
                                // Ini hanya trik untuk mempercepat tampilan dummy kalender (Hari ke-6 sampai 30)
                                for(let i=6; i<=30; i++) {
                                    document.write(`
                                    <div class="border border-gray-200 rounded-lg min-h-[100px] p-2 bg-white hover:border-emerald-500 transition cursor-pointer">
                                        <p class="text-right text-sm text-gray-700 font-bold mb-1">${i}</p>
                                        ${i % 7 === 3 ? `<div class="bg-red-200 text-red-800 text-[11px] font-semibold p-1 rounded text-center truncate">🛋️ OFF</div>` :
                                          i % 2 === 0 ? `<div class="bg-emerald-100 text-emerald-700 text-[11px] font-semibold p-1 rounded text-center truncate mb-1">🌞 Pagi (08-17)</div><div class="text-[10px] text-gray-500 truncate text-center"><i class="fa-solid fa-location-dot"></i> PT. Maju</div>` :
                                          `<div class="bg-blue-100 text-blue-700 text-[11px] font-semibold p-1 rounded text-center truncate mb-1">🌙 Malam (20-05)</div><div class="text-[10px] text-gray-500 truncate text-center"><i class="fa-solid fa-location-dot"></i> PT. Cipta</div>`
                                        }
                                    </div>
                                    `);
                                }
                            </script>

                        </div>
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-4 border-t pt-4">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                        <span class="text-sm text-gray-600">Shift Pagi</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-blue-500"></span>
                        <span class="text-sm text-gray-600">Shift Malam</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <span class="text-sm text-gray-600">Libur / OFF</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
