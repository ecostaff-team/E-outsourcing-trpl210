<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendor';
    protected $primaryKey = 'id_vendor';

    protected $fillable = [
        'nama_vendor',
        'status',
        'no_hp',
        'email',
        'alamat',
    ];

    public function adminVendors()
    {
        return $this->hasMany(AdminVendor::class, 'asal_vendor', 'id_vendor');
    }
}
