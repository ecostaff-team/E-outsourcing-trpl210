<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
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



    public function lemburs()
    {
        return $this->hasMany(Lembur::class, 'id_karyawan', 'id_karyawan');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function karyawanJadwals()
    {
        return $this->hasMany(KaryawanJadwal::class, 'id_karyawan', 'id_karyawan');
    }
}
