<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiift extends Model
{
    use HasFactory;

    protected $table = 'shiift';
    protected $primaryKey = 'id_shift';

    protected $fillable = [
        'jam_masuk',
        'jam_keluar',
        'tipe_shift',
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_shift', 'id_shift');
    }
}
