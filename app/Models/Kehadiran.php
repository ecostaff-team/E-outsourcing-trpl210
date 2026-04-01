<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    protected $primaryKey = 'id_kehadiran';

    protected $fillable = [
        'waktu_masuk',
        'waktu_keluar',
        'tanggal',
        'lokasi_masuk',
        'lokasi_keluar',
        'id_jadwal',
        'id_tipe_kehadiran',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function tipeKehadiran()
    {
        return $this->belongsTo(TipeKehadiran::class, 'id_tipe_kehadiran', 'id_tipe_kehadiran');
    }
}
