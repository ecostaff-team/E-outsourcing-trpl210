<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMPLATE SIDEBAR ADMINOUTSORCING</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }">

    <div class="flex">

        <!-- Tombol Mobile -->
        <button @click="open = !open" class="md:hidden p-4 text-black">
            ☰
        </button>

        <!-- Sidebar -->
        <div :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed md:static top-0 left-0 h-screen w-[70%] md:w-[19%] bg-[#3C8B5E] text-white 
    flex flex-col justify-between transition-transform duration-300 md:translate-x-0 z-50">

            <!--  HEADER -->
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

            <!--  FOOTER PROFILE -->
            <div class="px-4 pb-6">
                <hr class="border-white/30 mb-4">

                <div class="flex items-center gap-3 bg-white/20 p-3 rounded-xl backdrop-blur-md">
                    <!-- Avatar -->
                    <div class="bg-white/10 backdrop-blur-md p-2 rounded-xl
            shadow-[0_4px_20px_rgba(255,255,255,0.15)]
            hover:shadow-[0_8px_30px_rgba(255,255,255,0.35)]
            transition-all duration-300">
                        HR
                    </div>

                    <!-- Info -->
                    <div>
                        <p class="text-sm font-semibold">HR Ecogreen</p>
                        <p class="text-xs text-white/70">HR@ecogreen.id</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Overlay (Mobile) -->
        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/50 md:hidden z-40">

        </div>

        <!-- Content -->
        <div class="flex-1 p-6 md:ml-[19%]">
            @yield('content')
        </div>

    </div>

</body>

</html>
