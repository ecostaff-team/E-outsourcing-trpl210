<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kehadiran;
use App\Models\Jadwal;
use App\Models\TipeKehadiran;
use Illuminate\Support\Facades\DB;

class KehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data referensi
        $jadwal = Jadwal::first();
        $tipeHadir = TipeKehadiran::where('status_kehadiran', 'hadir')->first();
        $rekap = DB::table('rekap_kehadiran')->first();

        if ($jadwal && $tipeHadir && $rekap) {
            Kehadiran::create([
                'waktu_masuk' => '2026-04-21 06:50:00',
                'waktu_keluar' => '2026-04-21 15:00:00',
                'waktu_telat' => null,
                'tanggal' => '2026-04-21',
                'lokasi_masuk' => 'Kantor Pusat',
                'lokasi_keluar' => 'Kantor Pusat',
                'bukti' => 'default.png',
                'keterangan' => 'hadir',
                'rekapan_kehadiran_id' => $rekap->id_rekap,
                'jadwal_id' => $jadwal->id_jadwal,
                'tipe_kehadiran_id' => $tipeHadir->id_tipe_kehadiran,
            ]);
        }
    }
}
