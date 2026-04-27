<?php

namespace Database\Seeders;

use App\Models\AdminVendor;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Hr;

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
        $ecogreen = Vendor::where('vendor_name', 'PT. EcoGreen Jaya')->first();
        $bersih   = Vendor::where('vendor_name', 'CV. Bersih Nusantara')->first();

        $userAdmin = User::where('role', 'admin_vendor')->take(2)->get();
        $userHr = Hr::pluck('id_hr')->toArray();
        if (!$ecogreen || !$bersih || !$userAdmin) {
            throw new \Exception('Data tidak lengkap!');
        }

        AdminVendor::create([
            'user_id' => $userAdmin[0]->id,
            'vendor_id' => $ecogreen->id_vendor,
            'hr_id' => $userHr[0],
        ]);

        AdminVendor::create([
            'user_id' => $userAdmin[1]->id,
            'vendor_id' => $bersih->id_vendor,
            'hr_id' => $userHr[0],
        ]);
    }
}
