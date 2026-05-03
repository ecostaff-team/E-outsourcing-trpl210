<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* KEPALA DEPARTEMEN START */
        DB::table('users')->insert([
            'nama_lengkap' => 'Muhammad Rangga',
            'username' => 'Rangga',
            'email' => 'Rangga@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::KepalaDepartemen->value,
            'password' => Hash::make('userRangga'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Muhammad Rangga cihuy',
            'username' => 'Rangga cihuy',
            'email' => 'Ranggacihuy@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::KepalaDepartemen->value,
            'password' => Hash::make('userRanggacihuy'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Muhammad Thoriq Ali Aljundi',
            'username' => 'Thoriq',
            'email' => 'thoriq@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::KepalaDepartemen->value,
            'password' => Hash::make('userThoriq'),
        ]);

        /* Membuat 10 data dummy kepala departemen */
        User::factory()->count(10)->kepalaDepartemen()->create();

        /* KEPALA DEPARTEMENT END */
        /* =================================== */

        /* HR START */

        DB::table('users')->insert([
            'nama_lengkap' => 'Jason Devito',
            'username' => 'Jason',
            'email' => 'jason@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Hr->value,
            'password' => Hash::make('userJason'),
        ]);

        /* Membuat 10 data dummy HR */
        User::factory()->count(10)->hr()->create();
        /* HR END */
        /* =================================== */

        /* SUPER ADMIN START */

        DB::table('users')->insert([
            'nama_lengkap' => 'Atma Fauzilla',
            'username' => 'Atma',
            'email' => 'atma@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::SuperAdmin->value,
            'password' => Hash::make('userAtma'),
        ]);

        /* Membuat 2 data dummy super admin */
        User::factory()->count(2)->superAdmin()->create();

        /* SUPER ADMIN END */
        /* ===================================== */

        /* ADMINN VENDOR START */

        DB::table('users')->insert([
            'nama_lengkap' => 'Zahrah Faradila',
            'username' => 'Zahrah',
            'email' => 'zahrah@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::AdminVendor->value,
            'password' => Hash::make('userZahrah'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Zahrah Faradila2',
            'username' => 'Zahrah2',
            'email' => '2zahrah@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::AdminVendor->value,
            'password' => Hash::make('userZahrah2'),
        ]);

        /* Membuat 5 data dummy admin vendor */
        User::factory()->count(5)->adminVendor()->create();
        /* ADMIN VENDOR END */

        /* ================================ */

        /* KARYAWAN START */
        DB::table('users')->insert([
            'nama_lengkap' => 'Atma Karyawan',
            'username' => 'KaryawanAtma',
            'email' => '2atma@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Karyawan->value,
            'password' => Hash::make('userAtma'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Rangga Karyawan',
            'username' => 'KaryawanRangga',
            'email' => '2rangga@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Karyawan->value,
            'password' => Hash::make('userRangga'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'JasonKaryawan',
            'username' => 'Jason',
            'email' => '2jason@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Karyawan->value,
            'password' => Hash::make('userJason'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'ZahraKaryawan',
            'username' => 'Zahra',
            'email' => '3zahra@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Karyawan->value,
            'password' => Hash::make('userZahra'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'ThoriqKaryawan',
            'username' => 'Thoriq',
            'email' => '2Thoriq@gmail.com',
            'nomor_tlp' => '081275796452',
            'status' => 'active',
            'role' => UserRole::Karyawan->value,
            'password' => Hash::make('userThoriq'),
        ]);

        /* membuat data dummy 10 karyawan */
        User::factory()->count(10)->create();
        /* KARYAWAN END */

    }
}
