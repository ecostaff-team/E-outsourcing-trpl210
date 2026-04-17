<?php

namespace Database\Seeders;

use App\Models\AdminVendor;
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
        // Ambil data parent yang sudah di-seed
        $adminVendor1 = AdminVendor::where('username', 'admin_ecogreen')->first();
        $adminVendor2 = AdminVendor::where('username', 'admin_bersih')->first();
        $deptIT       = KepalaDepartement::where('nama_departement', 'IT')->first();
        $deptHR       = KepalaDepartement::where('nama_departement', 'Human Resources')->first();
        $deptOps      = KepalaDepartement::where('nama_departement', 'Operasional')->first();

        // Karyawan 1 - Aktif, di vendor EcoGreen, dept IT
        Karyawan::create([
            'nama_lengkap' => 'Andi Pratama',
            'no_telp' => '081111111111',
            'NIP' => 'NIP-2026-001',
            'email' => 'andi@ecogreen.com',
            'password' => 'password123',
            'alamat' => 'Jl. Melati No. 1, Jakarta Selatan',
            'tanggal_masuk' => '2026-01-15',
            'tanggal_keluar' => null,
            'username' => 'andi_pratama',
            'status' => 'Aktif',
            'id_admin_vendor' => $adminVendor1->id_admin_vendor,
            'id_kepala_dept' => $deptIT->id_departement,
        ]);

        // Karyawan 2 - Aktif, di vendor EcoGreen, dept HR
        Karyawan::create([
            'nama_lengkap' => 'Rina Wulandari',
            'no_telp' => '082222222222',
            'NIP' => 'NIP-2026-002',
            'email' => 'rina@ecogreen.com',
            'password' => 'password123',
            'alamat' => 'Jl. Mawar No. 5, Bandung',
            'tanggal_masuk' => '2026-02-01',
            'tanggal_keluar' => null,
            'username' => 'rina_wulandari',
            'status' => 'Aktif',
            'id_admin_vendor' => $adminVendor1->id_admin_vendor,
            'id_kepala_dept' => $deptHR->id_departement,
        ]);

        // Karyawan 3 - Tidak aktif (sudah keluar), di vendor Bersih, dept Operasional
        Karyawan::create([
            'nama_lengkap' => 'Dedi Setiawan',
            'no_telp' => '083333333333',
            'NIP' => 'NIP-2026-003',
            'email' => 'dedi@ecogreen.com',
            'password' => 'password123',
            'alamat' => 'Jl. Anggrek No. 10, Surabaya',
            'tanggal_masuk' => '2025-06-10',
            'tanggal_keluar' => '2026-03-01',
            'username' => 'dedi_setiawan',
            'status' => 'Tidak aktif',
            'id_admin_vendor' => $adminVendor2->id_admin_vendor,
            'id_kepala_dept' => $deptOps->id_departement,
        ]);

        // Karyawan 4 - Aktif, di vendor Bersih, dept IT
        Karyawan::create([
            'nama_lengkap' => 'Maya Sari',
            'no_telp' => '084444444444',
            'NIP' => 'NIP-2026-004',
            'email' => 'maya@ecogreen.com',
            'password' => 'password123',
            'alamat' => 'Jl. Dahlia No. 7, Yogyakarta',
            'tanggal_masuk' => '2026-03-01',
            'tanggal_keluar' => null,
            'username' => 'maya_sari',
            'status' => 'Aktif',
            'id_admin_vendor' => $adminVendor2->id_admin_vendor,
            'id_kepala_dept' => $deptIT->id_departement,
        ]);
    }
}
