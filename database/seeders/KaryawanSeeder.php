<?php

namespace Database\Seeders;

use App\Models\AdminVendor;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Karyawan;
use App\Models\KepalaDepartement;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Seed data Karyawan.
     * ⚠️ Seeder ini HARUS dijalankan SETELAH AdminVendorSeeder dan KepalaDepartementSeeder
     *    karena karyawan memiliki foreign key ke kedua tabel tersebut.
     */


    public function run(): void
    {
        $userKaryawan = User::where('role', 'karyawan')->take(5)->get();
        // Ambil data parent yang sudah di-seed

        $Vendor1      = Vendor::where('vendor_name', 'PT. EcoGreen Jaya')->first();
        $Vendor2      = Vendor::where('vendor_name', 'CV. Bersih Nusantara')->first();
        $deptIT       = KepalaDepartement::where('nama_departement', 'IT')->first();
        $deptHR       = KepalaDepartement::where('nama_departement', 'Human Resources')->first();
        $deptOps      = KepalaDepartement::where('nama_departement', 'Operasional')->first();

        $adminVendor1 = AdminVendor::where('vendor_id', $Vendor1->id_vendor)->first();
        $adminVendor2 = AdminVendor::where('vendor_id', $Vendor2->id_vendor)->first();
        // Karyawan 1 - Aktif, di vendor EcoGreen, dept IT
        Karyawan::create([
            'NIP' => 'NIP-2026-001',
            'alamat' => 'Jl. Melati No. 1, Jakarta Selatan',
            'tanggal_masuk' => '2026-01-15',
            'tanggal_keluar' => null,
            'admin_vendor_id' => $adminVendor1->id_admin_vendor,
            'kepala_dept_id' => $deptIT->id_departement,
            'user_id' => $userKaryawan[0]->id
        ]);

        // Karyawan 2 - Aktif, di vendor EcoGreen, dept HR
        Karyawan::create([
            'NIP' => 'NIP-2026-002',
            'alamat' => 'Jl. Mawar No. 5, Bandung',
            'tanggal_masuk' => '2026-02-01',
            'tanggal_keluar' => null,
            'admin_vendor_id' => $adminVendor1->id_admin_vendor,
            'kepala_dept_id' => $deptHR->id_departement,
            'user_id' => $userKaryawan[1]->id
        ]);

        // Karyawan 3 - Tidak aktif (sudah keluar), di vendor Bersih, dept Operasional
        Karyawan::create([
            'NIP' => 'NIP-2026-003',
            'alamat' => 'Jl. Anggrek No. 10, Surabaya',
            'tanggal_masuk' => '2025-06-10',
            'tanggal_keluar' => '2026-03-01',
            'admin_vendor_id' => $adminVendor2->id_admin_vendor,
            'kepala_dept_id' => $deptOps->id_departement,
            'user_id' => $userKaryawan[2]->id
        ]);

        // Karyawan 4 - Aktif, di vendor Bersih, dept IT
        Karyawan::create([
            'NIP' => 'NIP-2026-004',
            'alamat' => 'Jl. Dahlia No. 7, Yogyakarta',
            'tanggal_masuk' => '2026-03-01',
            'tanggal_keluar' => null,
            'admin_vendor_id' => $adminVendor2->id_admin_vendor,
            'kepala_dept_id' => $deptIT->id_departement,
            'user_id' => $userKaryawan[3]->id
        ]);

        Karyawan::create([
            'NIP' => 'NIP-2026-005',
            'alamat' => 'Jl. Bahlil No. 7, Jomokarta',
            'tanggal_masuk' => '2026-03-03',
            'tanggal_keluar' => null,
            'admin_vendor_id' => $adminVendor2->id_admin_vendor,
            'kepala_dept_id' => $deptIT->id_departement,
            'user_id' => $userKaryawan[4]->id
        ]);
    }
}
