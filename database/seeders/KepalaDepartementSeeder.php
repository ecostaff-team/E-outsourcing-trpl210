<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepalaDepartementSeeder extends Seeder
{
    /**
     * Seed data Kepala Departement.
     * Kepala departemen mengawasi karyawan di departemennya.
     */
    public function run(): void
    {
        $users = User::query()
            ->where('role', UserRole::KepalaDepartemen->value)
            ->get();

        foreach ($users as $user) {
            DB::table('kepala_departement')->updateOrInsert(
                ['user_id' => $user->id_user],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                    'nama_departement' => 'Departemen IT' ,
                ]
            );
        }
    }
}
