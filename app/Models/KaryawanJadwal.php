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
        'id_karyawan',
        'id_jadwal',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'id_karyawan');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
