<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMPLATE SIDEBAR ADMINOUTSORCING</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">
        <div class="w-1/4 bg-gray-800 text-white h-screen p-4">
            <h2 class="text-2xl font-bold mb-6">Admin Outsourcing</h2>
            <ul>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Karyawan</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Absensi</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Jadwal</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Aktivitas</a></li>
            </ul>
        </div>
        <div class="w-3/4 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
