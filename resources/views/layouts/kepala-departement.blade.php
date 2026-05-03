<x-Head-html>

        <x-sidebar :menus="[
            ['title' => 'Penjadwalan', 'icon' => 'fas fa-home', 'ref' => '/kepala-departemen/dashboard'],
            ['title' => 'Karyawan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/karyawan'],
            ['title' => 'Pengajuan', 'icon' => 'fas fa-users', 'ref' => '/kepala-departemen/pengajuan'],
            ['title' => 'Laporan', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/laporan'],
            ['title' => 'Shift', 'icon' => 'fas fa-cog', 'ref' => '/kepala-departemen/shift'],
        ]">kepala-departemen</x-sidebar>
        
</x-Head-html>
