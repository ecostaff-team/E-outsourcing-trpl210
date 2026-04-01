<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $fillable = [
        'nama_lengkap',
        'no_telp',
        'NIP',
        'email',
        'password',
        'alamat',
        'tanggal_masuk',
        'tanggal_keluar',
        'username',
        'status',
        'id_admin_vendor',
        'id_kepala_dept',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function adminVendor()
    {
        return $this->belongsTo(AdminVendor::class, 'id_admin_vendor', 'id_admin_vendor');
    }

    public function kepalaDepartement()
    {
        return $this->belongsTo(KepalaDepartement::class, 'id_kepala_dept', 'id_departement');
    }

    public function emburs()
    {
        return $this->hasMany(Lembur::class, 'id_karyawan', 'id_karyawan');
    }

    public function karyawanJadwals()
    {
        return $this->hasMany(KaryawanJadwal::class, 'id_karyawan', 'id_karyawan');
    }
}
