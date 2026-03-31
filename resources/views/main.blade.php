<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center md:justify-start"
    style="background-image: url('/images/bg.png');">

    <!-- DESKTOP LAYOUT -->
    <div class="hidden md:flex w-full h-screen">

        <!-- LEFT -->
        <div class="w-7/12 bg-black/50 text-white flex items-center justify-center p-12">
            <div class="max-w-md text-center">
                <img src="/images/logo.png" class="w-32 mx-auto mb-6" alt="Logo">

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
        <div class="w-5/12 flex items-center justify-center bg-white/60 backdrop-blur-md">
            <div class="w-full max-w-md p-10">
                <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">
                    Masuk
                </h2>

                <form method="POST" action="#">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm mb-1">Email</label>
                        <input type="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            placeholder="Masukkan email">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm mb-1">Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            placeholder="Masukkan password">
                    </div>

                    <button class="w-full bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                        Login
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
            <form method="POST" action="#">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        placeholder="Masukkan email">
                </div>

                <div class="mb-6">
                    <label class="block text-sm mb-1">Password</label>
                    <input type="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        placeholder="Masukkan password">
                </div>

                <button class="w-full bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>

</html>