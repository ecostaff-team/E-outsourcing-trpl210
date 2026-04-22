<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembur;
use App\Models\Karyawan;

class LemburSeeder extends Seeder
{
    public function run(): void
    {
        $karyawan = Karyawan::first();

        if ($karyawan) {
            Lembur::create([
                'mulai_lembur' => '2026-04-21 17:00:00',
                'selesai_lembur' => '2026-04-21 20:00:00',
                'tanggal_dibuat' => '2026-04-21 10:00:00',
                'status' => 'Lembur',
                'karyawan_id' => $karyawan->id_karyawan,
                'pemvalidasi' => 'Manager HR',
                'keterangan' => 'Penyelesaian proyek akhir bulan',
            ]);
        }
    }
}
