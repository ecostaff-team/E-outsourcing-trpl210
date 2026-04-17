<?php

namespace Database\Seeders;

use App\Models\KepalaDepartement;
use Illuminate\Database\Seeder;

class KepalaDepartementSeeder extends Seeder
{
    /**
     * Seed data Kepala Departement.
     * Kepala departemen mengawasi karyawan di departemennya.
     */
    public function run(): void
    {
        KepalaDepartement::create([
            'nama' => 'Ahmad Wijaya',
            'username' => 'kepala_it',
            'nama_departement' => 'IT',
            'status' => 'Aktif',
            'email' => 'ahmad@ecogreen.com',
            'alamat' => 'Jl. Teknologi No. 5, Jakarta',
            'password' => 'password123',
        ]);

        KepalaDepartement::create([
            'nama' => 'Diana Putri',
            'username' => 'kepala_hr',
            'nama_departement' => 'Human Resources',
            'status' => 'Aktif',
            'email' => 'diana@ecogreen.com',
            'alamat' => 'Jl. SDM No. 12, Jakarta',
            'password' => 'password123',
        ]);

        KepalaDepartement::create([
            'nama' => 'Riko Firmansyah',
            'username' => 'kepala_ops',
            'nama_departement' => 'Operasional',
            'status' => 'Aktif',
            'email' => 'riko@ecogreen.com',
            'alamat' => 'Jl. Operasi No. 8, Jakarta',
            'password' => 'password123',
        ]);
    }
}
