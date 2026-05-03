<x-Head-html>

    <x-sidebar :menus="[
        ['title' => 'Dashboard', 'icon' => 'fas fa-home', 'ref' => '/admin-outsourcing/dashboard'],
        ['title' => 'Pengajuan Karyawan', 'icon' => 'fas fa-users', 'ref' => '/admin-outsourcing/pengajuan-karyawan'],
        ['title' => 'Kelola Karyawan', 'icon' => 'fas fa-user-cog', 'ref' => '/admin-outsourcing/kelola-karyawan'],
    ]">Admin Outsourcing</x-sidebar>

</x-Head-html>
