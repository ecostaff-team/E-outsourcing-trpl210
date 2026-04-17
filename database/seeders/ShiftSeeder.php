<?php

namespace Database\Seeders;

use App\Models\Shiift;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Seed data Shift.
     * Data master untuk 3 tipe shift kerja: Pagi, Sore, Malam.
     */
    public function run(): void
    {
        Shiift::create([
            'jam_masuk' => '07:00:00',
            'jam_keluar' => '15:00:00',
            'tipe_shift' => 'Pagi',
        ]);

        Shiift::create([
            'jam_masuk' => '15:00:00',
            'jam_keluar' => '23:00:00',
            'tipe_shift' => 'Sore',
        ]);

        Shiift::create([
            'jam_masuk' => '23:00:00',
            'jam_keluar' => '07:00:00',
            'tipe_shift' => 'Malam',
        ]);
    }
}
