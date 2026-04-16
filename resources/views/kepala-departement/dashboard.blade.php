<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

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
            <div class="bg-white p-8 rounded-lg shadow-lg mt-6 w-full">
                <div class="overflow-x-auto">
                    <x-table :columns="[
                        ['label' => 'Nama', 'field' => 'nama'],
                        ['label' => 'Nomor HP', 'field' => 'nomor_hp'],
                        ['label' => 'Email', 'field' => 'email']
                    ]"

                        :data="[
                        ['nama' => 'Rangga', 'nomor_hp' => '08123456789', 'email' => 'rangga@mail.com'],
                        ['nama' => 'Budi', 'nomor_hp' => '08123456788', 'email' => 'budi@mail.com'],
                        ['nama' => 'Sinta', 'nomor_hp' => '08123456787', 'email' => 'sinta@mail.com'],
                    ]" />
                </div>
            </div>

        </div>
    </div>

</body>

</html>
