<?php

namespace Database\Seeders;

use App\Models\TipeKehadiran;
use Illuminate\Database\Seeder;

class TipeKehadiranSeeder extends Seeder
{
    /**
     * Seed data Tipe Kehadiran.
     * Data master untuk jenis-jenis kehadiran karyawan.
     *
     * Mengikuti enum dari migration:
     * - status_kehadiran: ['hadir', 'sakit', 'izin', 'mankir', 'cuti', 'terlambat']
     */
    public function run(): void
    {
        TipeKehadiran::create([
            'status_kehadiran' => 'hadir',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'sakit',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'mankir',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'cuti',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'izin',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'terlambat',
        ]);
    }
}
