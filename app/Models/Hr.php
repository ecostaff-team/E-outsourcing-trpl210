<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Hr extends Authenticatable
{
    use HasFactory;

    protected $table = 'hr';
    protected $primaryKey = 'id_hr';

    protected $fillable = [
        'status',
        'username',
        'password',
        'nama',
        'alamat',
        'no_hp',
        'email',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function hrAdminVendors()
    {
        return $this->hasMany(HrAdminVendor::class, 'id_hr', 'id_hr');
    }
}
