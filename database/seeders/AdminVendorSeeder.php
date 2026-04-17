<?php

namespace Database\Seeders;

use App\Models\AdminVendor;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

class AdminVendorSeeder extends Seeder
{
    /**
     * Seed data Admin Vendor.
     * Setiap vendor memiliki admin yang mengelola karyawan.
     * ⚠️ Seeder ini HARUS dijalankan SETELAH VendorSeeder.
     */
    public function run(): void
    {
        // Ambil vendor yang sudah dibuat oleh VendorSeeder
        $ecogreen = Vendor::where('nama_vendor', 'PT. EcoGreen Jaya')->first();
        $bersih   = Vendor::where('nama_vendor', 'CV. Bersih Nusantara')->first();

        AdminVendor::create([
            'username' => 'admin_ecogreen',
            'password' => 'password123', // Otomatis di-hash oleh model
            'nama' => 'Budi Santoso',
            'status' => 'Aktif',
            'asal_vendor' => $ecogreen->id_vendor,
        ]);

        AdminVendor::create([
            'username' => 'admin_bersih',
            'password' => 'password123',
            'nama' => 'Siti Rahayu',
            'status' => 'Aktif',
            'asal_vendor' => $bersih->id_vendor,
        ]);
    }
}
