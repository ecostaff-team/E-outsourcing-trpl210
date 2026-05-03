<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * ⚠️ URUTAN PENTING! Parent table harus di-seed sebelum child table
     * karena ada relasi foreign key antar tabel.
     *
     * Urutan dependensi:
     * 1. SuperAdmin        → tanpa dependensi
     * 2. Vendor             → tanpa dependensi
     * 3. KepalaDepartement  → tanpa dependensi
     * 4. Shift              → tanpa dependensi
     * 5. TipeKehadiran      → tanpa dependensi
     * 6. AdminVendor        → butuh: Vendor
     * 7. Karyawan           → butuh: AdminVendor + KepalaDepartement
     */
    
    public function run(): void
    {
        // --- Tabel tanpa dependensi (parent tables) ---
        $this->call([
            UserSeeder::class,
            SuperAdminSeeder::class,
            VendorSeeder::class,
            KepalaDepartementSeeder::class,
            ShiftSeeder::class,
            TipeKehadiranSeeder::class,
            HrSeeder::class,
            JadwalSeeder::class,
            RekapKehadiranSeeder::class,
        ]);

        // --- Tabel dengan 1 dependensi ---
        $this->call([
            AdminVendorSeeder::class,
        ]);

        // --- Tabel dengan 2+ dependensi ---
        $this->call([
            KaryawanSeeder::class,
            KaryawanJadwalSeeder::class,
            LemburSeeder::class,
            KehadiranSeeder::class,
        ]);
    }
}
