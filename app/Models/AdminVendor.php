<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminVendor extends Model
{
    use HasFactory;

    protected $table = 'admin_vendor';
    protected $primaryKey = 'id_admin_vendor';

    protected $fillable = [
        'user_id',
        'vendor_id',
    ];


    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id_vendor');
    }

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'admin_vendor_id', 'id_admin_vendor');
    }

    public function hrAdminVendors()
    {
        return $this->belongsTo(HrAdminVendor::class, 'admin_vendor_id', 'id_admin_vendor');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
