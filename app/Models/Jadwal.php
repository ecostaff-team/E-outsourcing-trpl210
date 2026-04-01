<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'status',
        'tanggal',
        'dibuat_oleh',
        'id_shift',
    ];

    public function shiift()
    {
        return $this->belongsTo(Shiift::class, 'id_shift', 'id_shift');
    }

    public function karyawanJadwals()
    {
        return $this->hasMany(KaryawanJadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function kehadirans()
    {
        return $this->hasMany(Kehadiran::class, 'id_jadwal', 'id_jadwal');
    }
}
