<!-- 🔥 SIDEBAR -->
@props(['title'])

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
            <h3 class="text-white font-bold text-lg md:text-2xl">
                <img src="/images/logo.png" alt="" class="w-8 inline-block ml-2">
                EcoGreen
            </h3>
        </div>

        <hr class="border-white/30 mx-4">

        <!-- MENU -->
        <ul id="sidebar-menu" class="mt-8 ml-4">
            @foreach ($menus as $menu)
                @php
                    $isActive = request()->is(ltrim($menu['ref'], '/'));
                @endphp

                <li>
                    <a href="{{ $menu['ref'] }}"
                        class="flex items-center gap-3 text-md font-medium pl-4 py-2 rounded-xl transition-all duration-300
            {{ $isActive
                ? 'translate-x-2 bg-white/75 text-gray-700 shadow-inner hover:bg-linear-to-r hover:to-green-400 from-white/20 hover:-translate-y-0.5 hover:translate-x-4' 
                : 'hover:bg-linear-to-r hover:to-green-400 from-white/20 hover:-translate-y-0.5 hover:translate-x-4' }}">

                        <i class="{{ $menu['icon'] }}"></i>
                        {{ $menu['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>


    </div>

    <!-- FOOTER PROFILE -->
    <div class="px-4 pb-6">
        <hr class="border-white/30 mb-4">

        <div class="flex items-center gap-3 bg-white/20 p-3 rounded-xl backdrop-blur-md">
            <div>
                <p class="text-sm font-semibold">{{ $slot }}</p>
                <p class="text-xs text-white/70">{{ $slot . ' @ecogreen.id' }} </p>
            </div>
        </div>
    </div>
</aside>

<!-- 🌫️ OVERLAY -->
<div x-show="open" @click="open = false" class="fixed inset-0 bg-black/40 backdrop-blur-sm md:hidden z-40"></div>
