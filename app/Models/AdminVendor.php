<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminVendor extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_vendor';
    protected $primaryKey = 'id_admin_vendor';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'status',
        'asal_vendor',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'asal_vendor', 'id_vendor');
    }

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'id_admin_vendor', 'id_admin_vendor');
    }
    
    public function hrAdminVendors()
    {
        return $this->hasMany(HrAdminVendor::class, 'id_admin_vendor', 'id_admin_vendor');
    }
}
