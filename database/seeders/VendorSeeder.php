<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;

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
            'status' => 'active',
            'nomor_tlp' => '081234567890',
            'email' => 'ecogreen@vendor.com',
            'alamat' => 'Jl. Industri No. 10, Jakarta Selatan',
        ]);

        Vendor::create([
            'nama_vendor' => 'CV. Bersih Nusantara',
            'status' => 'active',
            'nomor_tlp' => '082345678901',
            'email' => 'bersihnusantara@vendor.com',
            'alamat' => 'Jl. Raya Bandung No. 25, Bandung',
        ]);

        Vendor::create([
            'nama_vendor' => 'PT. Maju Bersama',
            'status' => 'inactive',
            'nomor_tlp' => '083456789012',
            'email' => 'majubersama@vendor.com',
            'alamat' => 'Jl. Sudirman No. 100, Surabaya',
        ]);
    }
}
