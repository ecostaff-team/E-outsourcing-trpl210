<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekapKehadiranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rekap_kehadiran')->insert([
            'mangkir' => 0,
            'izin' => 1,
            'sakit' => 0,
            'cuti' => 0,
            'hadir' => 20,
            'total_lembur' => 5,
            'total_jam_kerja' => 160,
            'total_terlambat' => 2,
            'pemvalidasi' => 'HR Manager',
            'tanggal_validasi' => '2026-04-30',
            'status_validasi' => 'Valid',
            'tanggal_rekap' => '2026-04-30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
