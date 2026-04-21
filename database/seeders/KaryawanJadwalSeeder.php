<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KaryawanJadwal;
use App\Models\Karyawan;
use App\Models\Jadwal;

class KaryawanJadwalSeeder extends Seeder
{
    public function run(): void
    {
        $karyawan = Karyawan::first();
        $jadwal = Jadwal::first();

        if ($karyawan && $jadwal) {
            KaryawanJadwal::create([
                'karyawan_id' => $karyawan->id_karyawan,
                'jadwal_id' => $jadwal->id_jadwal,
            ]);
        }
    }
}
