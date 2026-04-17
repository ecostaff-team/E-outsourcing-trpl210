<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Seed data Vendor.
     * Vendor adalah perusahaan outsourcing yang bekerja sama.
     */
    public function run(): void
    {
        Vendor::create([
            'nama_vendor' => 'PT. EcoGreen Jaya',
            'status' => 'aktif',
            'no_hp' => '081234567890',
            'email' => 'ecogreen@vendor.com',
            'alamat' => 'Jl. Industri No. 10, Jakarta Selatan',
        ]);

        Vendor::create([
            'nama_vendor' => 'CV. Bersih Nusantara',
            'status' => 'aktif',
            'no_hp' => '082345678901',
            'email' => 'bersihnusantara@vendor.com',
            'alamat' => 'Jl. Raya Bandung No. 25, Bandung',
        ]);

        Vendor::create([
            'nama_vendor' => 'PT. Maju Bersama',
            'status' => 'tidak aktif',
            'no_hp' => '083456789012',
            'email' => 'majubersama@vendor.com',
            'alamat' => 'Jl. Sudirman No. 100, Surabaya',
        ]);
    }
}
