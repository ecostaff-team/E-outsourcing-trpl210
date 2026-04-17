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
     * - status_kehadiran: ['hadir', 'tidak_hadir']
     * - keterangan: ['masuk kerja', 'libur', 'mankir', 'sakit']
     */
    public function run(): void
    {
        TipeKehadiran::create([
            'status_kehadiran' => 'hadir',
            'bukti' => '',
            'keterangan' => 'masuk kerja',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'tidak_hadir',
            'bukti' => '',
            'keterangan' => 'libur',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'tidak_hadir',
            'bukti' => '',
            'keterangan' => 'mankir',
        ]);

        TipeKehadiran::create([
            'status_kehadiran' => 'tidak_hadir',
            'bukti' => '',
            'keterangan' => 'sakit',
        ]);
    }
}
