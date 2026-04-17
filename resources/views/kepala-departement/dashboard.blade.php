<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href={{ asset('css/alert.css')}}>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex">
        {{-- SIDEBAR --}}
        <x-sidebar :menus="[
            ['title' => 'Dashboard', 'icon' => 'fas fa-home'],
            ['title' => 'User', 'icon' => 'fas fa-users'],
            ['title' => 'Settings', 'icon' => 'fas fa-cog'],
        ]">kepala-departemen</x-sidebar>

        <div class="flex-1 p-6 ml-0">
            <x-header>Kepala Departemen {{-- <-- Ganti aja ini kalo mau --}}</x-header>
            <button onclick="showToast()"
                class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-medium rounded-xl shadow-md hover:shadow-lg active:scale-95 transition-all duration-200 ease-in-out flex items-center gap-2">
                🔔 <span>Tampilkan Notifikasi</span>
            </button>
            <x-alert></x-alert>

            <div class="bg-white p-8 rounded-lg shadow-lg mt-6 w-full">
                <div class="overflow-x-auto">
                    <x-table :columns="[
                        ['label' => 'Nama', 'field' => 'nama'],
                        ['label' => 'NIP', 'field' => 'nip'],
                        ['label' => 'Email', 'field' => 'email'],
                        ['label' => 'Departemen', 'field' => 'departemen'],
                        ['label' => 'Tanggal Bergabung', 'field' => 'tanggal_bergabung'],
                        ['label' => 'Nomor HP', 'field' => 'nomor_hp'],
                        ['label' => 'Email', 'field' => 'email'],
                        ['label' => 'Aksi', 'field' => 'aksi'],
                    ]" :data="[
                        [
                            'nama' => 'Rangga',
                            'nomor_hp' => '08123456789',
                            'email' => 'rangga@mail.com',
                            'departemen' => 'IT',
                            'tanggal_bergabung' => '2020-01-15',
                            'nip' => '1234567890',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Budi',
                            'nomor_hp' => '08123456788',
                            'email' => 'budi@mail.com',
                            'departemen' => 'HR',
                            'tanggal_bergabung' => '2019-06-10',
                            'nip' => '0987654321',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Sinta',
                            'nomor_hp' => '08123456787',
                            'email' => 'sinta@mail.com',
                            'departemen' => 'Finance',
                            'tanggal_bergabung' => '2021-03-22',
                            'nip' => '1122334455',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Dewi',
                            'nomor_hp' => '08123456786',
                            'email' => 'dewi@mail.com',
                            'departemen' => 'Marketing',
                            'tanggal_bergabung' => '2020-11-30',
                            'nip' => '5544332211',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Andi',
                            'nomor_hp' => '08123456785',
                            'email' => 'andi@mail.com',
                            'departemen' => 'IT',
                            'tanggal_bergabung' => '2020-07-15',
                            'nip' => '1122334455',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Rina',
                            'nomor_hp' => '08123456784',
                            'email' => 'rina@mail.com',
                            'departemen' => 'HR',
                            'tanggal_bergabung' => '2020-01-15',
                            'nip' => '1122334455',
                            'aksi' => '',
                        ],
                        [
                            'nama' => 'Sari',
                            'nomor_hp' => '08123456783',
                            'email' => 'sari@mail.com',
                            'departemen' => 'Finance',
                            'tanggal_bergabung' => '2021-03-22',
                            'nip' => '1122334455',
                            'aksi' => '',
                        ],
                    ]" />
                </div>
            </div>

        </div>
    </div>
</body>
<script src="{{ asset('js/alert.js') }}"></script>

</html>
