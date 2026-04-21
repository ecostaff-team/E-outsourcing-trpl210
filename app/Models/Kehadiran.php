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
        'waktu_telat',
        'tanggal',
        'lokasi_masuk',
        'lokasi_keluar',
        'bukti',
        'keterangan',
        'rekapan_kehadiran_id',
        'jadwal_id',
        'tipe_kehadiran_id',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id_jadwal');
    }

    public function tipeKehadiran()
    {
        return $this->belongsTo(TipeKehadiran::class, 'tipe_kehadiran_id', 'id_tipe_kehadiran');
    }
}
