<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrAdminVendor extends Model
{
    use HasFactory;

    protected $table = 'hr_admin_vendor';
    protected $primaryKey = 'id_relasi';

    protected $fillable = [
        'id_hr',
        'id_admin_vendor',
    ];

    public function hr()
    {
        return $this->belongsTo(Hr::class, 'id_hr', 'id_hr');
    }

    public function adminVendor()
    {
        return $this->belongsTo(AdminVendor::class, 'id_admin_vendor', 'id_admin_vendor');
    }
}
