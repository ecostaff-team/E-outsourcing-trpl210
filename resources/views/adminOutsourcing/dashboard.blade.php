<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <!-- 🔘 HAMBURGER -->


    <div class="flex">

        <!-- 🔥 SIDEBAR -->
        <div :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed md:static top-0 left-0 h-screen
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
                    <p class="text-sm text-white/60">Admin Outsourcing</p>
                </div>

                <hr class="border-white/30 mx-4">

                <!-- MENU -->
                <ul class="mt-6 space-y-2 pl-2">
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                                   transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-book"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex items-center gap-3 text-lg font-medium px-4 py-2 rounded-l-xl
                                   transition-all duration-300 hover:bg-white/20 hover:pl-6">
                            <i class="fa-solid fa-user"></i>
                            Karyawan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- FOOTER PROFILE -->
            <div class="px-4 pb-6">
                <hr class="border-white/30 mb-4">

                <div class="flex items-center gap-3 bg-white/20 p-3 rounded-xl backdrop-blur-md">
                    <div
                        class="bg-white/10 backdrop-blur-md p-2 rounded-xl shadow-[0_4px_20px_rgba(255,255,255,0.15)] hover:shadow-[0_8px_30px_rgba(255,255,255,0.35)] transition-all duration-300">
                        AdO </div> <!-- Info -->
                    <div>
                        <p class="text-sm font-semibold">Admin Outsourcing</p>
                        <p class="text-xs text-white/70">Admin_Out@ecogreen.id</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🌫️ OVERLAY -->
        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>

        <!-- 📦 CONTENT -->

        <!-- SELAMAT DATANG -->


        <div class="flex-1 p-6 ml-0">

            <!-- HEADER CONTENT -->

            <div class="flex items-center justify-between mb-6">
                <button @click="open = !open"
                    class="top-4 left-4 md:hidden bg-white p-2 rounded-lg shadow
               transition hover:scale-110 active:scale-95">
                    ☰
                </button>
                <div class="text-center">
                    <h3 class="text-emerald-900 font-bold text-lg md:text-2xl">
                        <img src="/images/logo.png" alt="" class="w-8 inline-block ml-2">
                        EcoGreen
                    </h3>
                </div>
                <!-- PROFILE DROPDOWN -->
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
            <div>
                <h1 class="text-xl font-bold text-gray-800 md:text-2xl">
                    Selamat Datang, Admin OutSourcing 👋
                </h1>
                <p class="text-gray-500 text-sm">
                    Semoga harimu produktif dan menyenangkan
                </p>
            </div>

            @yield('content')

            halo
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}

        </div>

    </div>

</body>

</html>
