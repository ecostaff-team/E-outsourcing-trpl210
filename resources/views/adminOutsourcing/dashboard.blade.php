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

        <x-sidebar>ADMIN_KAMPUS</x-sidebar>
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
