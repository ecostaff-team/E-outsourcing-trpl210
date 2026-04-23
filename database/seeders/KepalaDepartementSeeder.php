<?php

namespace Database\Seeders;

use App\Models\KepalaDepartement;
use App\Models\User;
use Illuminate\Database\Seeder;

class KepalaDepartementSeeder extends Seeder
{
    /**
     * Seed data Kepala Departement.
     * Kepala departemen mengawasi karyawan di departemennya.
     */
    public function run(): void
    {
        $userKepalaDepartement = User::where('role', 'kepala_departemen')->take(3)->get();
        KepalaDepartement::create([
            'nama_departement' => 'IT',
            'user_id' => $userKepalaDepartement[0]->id
        ]);

        KepalaDepartement::create([
            'nama_departement' => 'Human Resources',
            'user_id' => $userKepalaDepartement[1]->id
        ]);

        KepalaDepartement::create([
            'nama_departement' => 'Operasional',
            'user_id' => $userKepalaDepartement[2]->id
        ]);
    }
}
