<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;

    protected $table = 'lembur';
    protected $primaryKey = 'id_lembur';

    protected $fillable = [
        'mulai_lembur',
        'selesai_lembur',
        'tanggal_dibuat',
        'status',
        'id_karyawan',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan', 'id_karyawan');
    }
}
