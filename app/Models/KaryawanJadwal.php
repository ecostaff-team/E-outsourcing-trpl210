<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanJadwal extends Model
{
    use HasFactory;

    protected $table = 'karyawan_jadwal';
    protected $primaryKey = 'id_relasi';

    protected $fillable = [
        'karyawan_id',
        'jadwal_id',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id_karyawan');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id_jadwal');
    }
}
