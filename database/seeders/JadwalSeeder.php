<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\Shift;
use App\Models\KepalaDepartement;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kepalaDepartement = KepalaDepartement::pluck('id_departement')->toArray();

        $ShiftPagi = Shift::query()->where('tipe_shift', 'Pagi')->first();
        $ShiftSore = Shift::query()->where('tipe_shift', 'Sore')->first();
        $ShiftMalam = Shift::query()->where('tipe_shift', 'Malam')->first();
        Jadwal::create([
            'status' => 'Aktif',
            'tanggal' => '2026-04-21',
            'dibuat_oleh' => $kepalaDepartement[0],
            'shift_id' => $ShiftPagi->id_shift,
        ]);
        Jadwal::create([
            'status' => 'Aktif',
            'tanggal' => '2026-04-21',
            'dibuat_oleh' => $kepalaDepartement[1],
            'shift_id' => $ShiftSore->id_shift,
        ]);
        Jadwal::create([
            'status' => 'Aktif',
            'tanggal' => '2026-04-21',
            'dibuat_oleh' => $kepalaDepartement[2],
            'shift_id' => $ShiftMalam->id_shift,
        ]);
    }
}
