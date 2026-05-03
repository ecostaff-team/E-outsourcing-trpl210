<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Seed data Super Admin.
     * Akun ini digunakan untuk login pertama kali ke sistem.
     *
     * Note: Menggunakan DB::table karena kolom di migration adalah 'name',
     * bukan 'nama' seperti di model. Perlu disinkronkan nanti.
     */
    public function run(): void
    {
        $users = User::query()
            ->where('role', UserRole::SuperAdmin->value)
            ->get();

        foreach ($users as $user) {
            DB::table('super_admin')->updateOrInsert(
                ['user_id' => $user->id_user],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
