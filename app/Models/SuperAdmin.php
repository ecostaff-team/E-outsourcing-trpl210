<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SuperAdmin extends Model
{
    use HasFactory;

    protected $table = 'super_admin';
    protected $primaryKey = 'id_super_admin';

    protected $fillable = [
        'nama',
        'password',
        'id_user',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
