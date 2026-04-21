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
        'NIP',
        'alamat',
        'tanggal_masuk',
        'tanggal_keluar',
        'admin_vendor_id',
        'kepala_dept_id',
        'user_id',
    ];

    public function adminVendor()
    {
        return $this->belongsTo(AdminVendor::class, 'admin_vendor_id', 'id_admin_vendor');
    }

    public function kepalaDepartement()
    {
        return $this->belongsTo(KepalaDepartement::class, 'kepala_dept_id', 'id_departement');
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
