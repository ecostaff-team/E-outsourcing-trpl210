<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login eco-outsourcing</title>
    @livewireStyles

    @vite('resources/css/app.css')
    <link rel="icon" href="/images/logo.png" type="image/png" title="Atom">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center md:justify-start"
    style="background-image: url('/images/bg.png');">

        <style>
        /* Container Animasi (Awalnya tersembunyi) */
        #animationOverlay {
            position: fixed;
            inset: 0;
            background-color: #f0fdf4; /* Warna hijau super muda */
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        /* 1. Logo Naik ke atas dan mengecil */
        @keyframes logoUpAndShrink {
            0% { transform: translateY(100px) scale(1.6); opacity: 0; }
            30% { transform: translateY(0px) scale(1.6); opacity: 1; }
            100% { transform: translateY(-50px) scale(0.6); opacity: 1; }
        }

        /* 2. Menggelinding ke kiri */
        @keyframes rollLeft {
            0% { transform: translateX(0) rotate(0deg); }
            100% { transform: translateX(-200px) rotate(-720deg); }
        }

        /* 3. Teks Eco Green Muncul dari belakang logo ke kanan */
        @keyframes revealText {
            0% { transform: translateX(-200px); opacity: 0; }
            100% { transform: translateX(30px); opacity: 1; }
        }

        .anim-logo-wrapper {
            position: absolute;
            animation: logoUpAndShrink 1.2s ease-in-out forwards;
        }

        .anim-logo {
            width: 150px;
            animation: rollLeft 1s ease-in-out 1.2s forwards;
        }

        .anim-text {
            font-size: 4rem;
            font-weight: 700;
            color: #059669; /* Emerald 600 */
            opacity: 0;
            position: absolute;
            animation: revealText 0.8s ease-out 1.8s forwards;
            white-space: nowrap;
        }
    </style>

    <div id="animationOverlay">
        <div class="anim-logo-wrapper">
            <img src="/images/logo.png" class="anim-logo" alt="Logo">
        </div>
        <div class="anim-text">Eco Green</div>
    </div>

    <!-- DESKTOP LAYOUT -->
    <div class="hidden md:flex w-full h-screen">

        <!-- LEFT -->
        <div class="w-7/12 bg-black/50 text-white flex items-center justify-center p-12">
            <div class="max-w-md text-center">
                <img src="/images/logo.png"
                    class="w-32 mx-auto mb-6 transition duration-300 transform hover:scale-110 hover:-translate-y-1 hover:shadow-xl"
                    alt="Logo">

                <h1 class="text-3xl font-bold mb-4">
                    Eco Green
                </h1>

                <p class="text-sm opacity-90 leading-relaxed">
                    Sistem manajemen outsourcing yang membantu mengelola karyawan,
                    absensi, jadwal, dan aktivitas secara terpusat dan efisien.
                </p>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="w-5/12 flex items-center justify-center bg-white/10 backdrop-blur-md">
            <div class="w-full max-w-md p-10">
                <h2 class="text-5xl font-bold mb-16 text-center text-white/90">
                    Masuk
                </h2>

                <form wire:submit.prevent="login">
                    @csrf

                    @if (session('error'))
                        <div class="mb-4 text-center text-red-500 font-semibold bg-red-100 p-2 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror

                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror

                    @error('login')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror

                    <div class="mb-4">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50"></span>

                        </span>

                        <input type="text" placeholder="👤Enter username" wire:model="email"
                            class="w-full pl-10 pr-4 py-2 mb-3 bg-white/80 text-black placeholder-black/70 rounded-lg
                                    outline-none transition
                                    focus:placeholder-black/90
                                    focus:ring-2 focus:ring-emerald-500
                                    focus:shadow-[0_0_12px_rgba(255,255,255,0.25)]" />
                    </div>

                    <div class="mb-6">
                        <input type="password" placeholder="🔑Enter password" wire:model="password"
                            class="w-full pl-10 pr-4 mb-6 py-2 bg-white/80 text-black placeholder-black/70 rounded-lg
                                    outline-none transition
                                    focus:placeholder-black/90
                                    focus:ring-2 focus:ring-emerald-500
                                    focus:shadow-[0_0_12px_rgba(255,255,255,0.25)]" />
                    </div>

                    <button type="submit"
                        class="w-full mb-3 bg-emerald-600 text-white/70 hover:text-white transition py-2 rounded-lg hover:bg-emerald-700 transition">
                        Masuk
                    </button>
                    <button type="button"
                        class="w-full bg-transparent border border-white/50 text-white/70 hover:text-white transition py-2 rounded-lg hover:bg-white/10 transition">
                        Lupa Password
                    </button>

                </form>
            </div>
        </div>

    </div>

    <!-- MOBILE / TABLET (CARD MODE) -->
    <div class="md:hidden w-full px-4">

        <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-8 max-w-md mx-auto">

            <!-- Logo -->
            <div class="text-center mb-6">
                <img src="/images/logo.png" class="w-20 mx-auto mb-3" alt="Logo">
                <h1 class="text-xl font-bold text-gray-800">Eco Green</h1>
            </div>

            <!-- Form -->
            <form wire:submit.prevent="login">
                @csrf

                @if (session('error'))
                    <div class="mb-4 text-center text-red-500 font-semibold bg-red-100 p-2 rounded-lg text-sm">
                        {{ session('error') }}
                    </div>
                @endif
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                @error('login')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div class="mb-4">
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email" wire:model="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        placeholder="Masukkan email">
                </div>

                <div class="mb-6">
                    <label class="block text-sm mb-1">Password</label>
                    <input type="password" wire:model="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        placeholder="Masukkan password">
                </div>

                <button class="w-full bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                    Login
                </button>

            </form>

        </div>

    </div>
    @livewireScripts
    <script>
        document.addEventListener('login-success', function (event) {
            // Tampilkan layar overlay animasi
            const overlay = document.getElementById('animationOverlay');
            overlay.style.display = 'flex';

            // Tunggu sampai animasi selesai (sekitar 3 detik) sebelum memindahkan halaman
            setTimeout(function() {
                window.location.href = event.detail.url;
            }, 3500);
        });
    </script>

</body>

</html>
