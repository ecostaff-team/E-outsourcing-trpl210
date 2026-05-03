<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $table = 'shift';
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
