<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KepalaDepartement extends Authenticatable
{
    use HasFactory;

    protected $table = 'kepala_departement';
    protected $primaryKey = 'id_departement';

    protected $fillable = [
        'nama_departement',
        'user_id',
    ];

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'id_kepala_dept', 'id_departement');
    }
}
