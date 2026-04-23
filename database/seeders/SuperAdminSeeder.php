<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\models\User;

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
        $userSuperAdmin = User::where('role', 'super_admin')->first();

        DB::table('super_admin')->insert([
            'name' => 'Super Admin',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => $userSuperAdmin->id,
        ]);
    }
}
