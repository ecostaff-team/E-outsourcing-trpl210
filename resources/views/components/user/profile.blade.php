<div class="bg-white shadow-xl rounded-2xl p-6 w-full max-w-4xl mx-auto">

    {{-- Header --}}
    <div class="flex items-center gap-6">
        <img
            src="{{ $user->foto ?? 'https://ui-avatars.com/api/?name='.$user->nama_lengkap }}"
            class="w-24 h-24 rounded-full object-cover border-4 border-gray-100"
        >

        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                {{ $user->nama_lengkap }}
            </h2>
            <p class="text-gray-500">
                {{ $user->email }}
            </p>

            <span class="inline-block mt-2 px-3 py-1 text-sm rounded-full bg-blue-100 text-blue-600">
                {{ $user->role }}
            </span>
        </div>
    </div>

    {{-- Divider --}}
    <div class="my-6 border-t"></div>

    {{-- Detail --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <p class="text-sm text-gray-500">Username</p>
            <p class="font-semibold">{{ $user->username }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Nomor HP</p>
            <p class="font-semibold">{{ $user->no_hp ?? '-' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Bergabung Sejak</p>
            <p class="font-semibold">
                {{ $user->created_at->format('d M Y') }}
            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Status</p>
            <span class="px-2 py-1 text-sm rounded bg-green-100 text-green-600">
                Aktif
            </span>
        </div>

    </div>

    {{-- Slot tambahan (fleksibel buat role berbeda) --}}
    @if(isset($slot))
        <div class="mt-6">
            {{ $slot }}
        </div>
    @endif

</div>
