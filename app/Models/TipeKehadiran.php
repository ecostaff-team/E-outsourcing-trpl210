<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKehadiran extends Model
{
    use HasFactory;

    protected $table = 'tipe_kehadiran';
    protected $primaryKey = 'id_tipe_kehadiran';

    protected $fillable = [
        'status_kehadiran',
        'bukti',
        'keterangan',
    ];

    public function kehadirans()
    {
        return $this->hasMany(Kehadiran::class, 'id_tipe_kehadiran', 'id_tipe_kehadiran');
    }
}
