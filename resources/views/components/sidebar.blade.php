<!-- 🔥 SIDEBAR -->
<aside :class="open ? 'translate-x-0' : '-translate-x-full'"
    class="fixed md:sticky md:top-0 top-0 left-0 h-screen
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
</aside>

<!-- 🌫️ OVERLAY -->
<div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>

