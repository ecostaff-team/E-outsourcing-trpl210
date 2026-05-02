<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KepalaDepartemen extends Authenticatable
{
    use HasFactory;

    protected $table = 'kepala_departemen';
    protected $primaryKey = 'id_departemen';

    protected $fillable = [
        'nama_departemen',
        'user_id',
    ];

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'id_kepala_dept', 'id_departement');
    }
}
