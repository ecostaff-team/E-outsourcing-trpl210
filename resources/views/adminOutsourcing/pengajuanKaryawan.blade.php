<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Karyawan Admin Outsorcing</title>
    
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

    <div class="flex">

        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-book'],
            ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-user-group'],
        ]" />

        {{-- MAIN CONTENT --}}
        <div class="flex-1 p-6">

            {{-- HEADER --}}
            <x-header>Admin Outsourcing</x-header>

            <div class="flex justify-center items-center bg-gray-100 p-4">
                <div class="bg-white shadow-lg w-full p-8">
                    <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Form Pengajuan Karyawan</h2>

                    <form action="#" method="POST" class="space-y-5">
                        <div>
                            <label for="nip" class="block text-sm font-bold text-gray-900 mb-2">
                                NIP <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nip" name="nip" placeholder="Masukkan NIP" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                        </div>

                        <div>
                            <label for="nama" class="block text-sm font-bold text-gray-900 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-900 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" placeholder="Masukkan Email" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                        </div>

                        <div>
                            <label for="telepon" class="block text-sm font-bold text-gray-900 mb-2">
                                Nomor Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                        </div>

                        <div>
                            <label for="alamat" class="block text-sm font-bold text-gray-900 mb-2">
                                Alamat <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="alamat" name="alamat" placeholder="Masukkan Detail Alamat" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                        </div>

                        <div class="flex justify-end pt-4">
                            <button type="submit" 
                                class="bg-[#009254] hover:bg-[#007a46] text-white font-bold py-3 px-8 rounded-2xl transition-all duration-200">
                                Ajukan Data
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
</body>
</html>