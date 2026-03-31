<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuperAdmin extends Model
{
    use HasFactory;
    protected string $table = 'super_admin';
    protected array $fillable = [
        'name',
        'password',
    ];

    //
}
