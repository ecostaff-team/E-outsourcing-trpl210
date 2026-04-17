@props([
    'title' => '',
    'value' => '',
    'subtext' => '',
    'icon' => '',
    'borderColor' => '',
    'textColor' => 'text-gray-800',
    'iconBg' => 'bg-gray-100',
    'iconColor' => 'text-gray-700',
])

<div
    class="bg-white rounded-xl p-4 shadow-sm border-2 border-transparent {{ $borderColor }} flex items-center gap-4 relative transition-all duration-300 hover:-translate-y-1 hover:shadow-lg cursor-pointer">

    <div
        class="w-14 h-14 {{ $iconBg }} rounded-xl shadow-inner border border-white/50 flex items-center justify-center {{ $iconColor }} text-2xl shrink-0">
        <i class="{{ $icon }}"></i>
    </div>

    <div class="flex-1 text-center pr-2">
        <p class="text-xs md:text-sm text-gray-500 font-bold uppercase tracking-wider">{{ $title }}</p>
        <h3 class="text-3xl md:text-4xl font-extrabold {{ $textColor }} my-1">{{ $value }}</h3>

        <span
            class="text-[10px] md:text-xs font-semibold text-gray-500 bg-gray-50 border border-gray-100 rounded-full inline-block px-3 py-0.5">
            {{ $subtext }}
        </span>
    </div>
</div>

