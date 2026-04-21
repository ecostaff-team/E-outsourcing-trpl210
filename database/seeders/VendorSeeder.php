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
        vendor::create([
            'vendor_name' => 'PT. EcoGreen Jaya',
            'status' => 'active',
            'phone_number' => '081234567890',
            'email' => 'ecogreen@vendor.com',
            'alamat' => 'Jl. Industri No. 10, Jakarta Selatan',
        ]);

        vendor::create([
            'vendor_name' => 'CV. Bersih Nusantara',
            'status' => 'active',
            'phone_number' => '082345678901',
            'email' => 'bersihnusantara@vendor.com',
            'alamat' => 'Jl. Raya Bandung No. 25, Bandung',
        ]);

        vendor::create([
            'vendor_name' => 'PT. Maju Bersama',
            'status' => 'inactive',
            'phone_number' => '083456789012',
            'email' => 'majubersama@vendor.com',
            'alamat' => 'Jl. Sudirman No. 100, Surabaya',
        ]);
    }
}
