<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
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
            'full_name' => 'Muhammad Rangga',
            'username' => 'Rangga',
            'email' => 'Rangga@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'kepala_departemen',
            'password' => Hash::make('userRangga'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'Muhammad Rangga cihuy',
            'username' => 'Rangga cihuy',
            'email' => 'Ranggacihuy@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'kepala_departemen',
            'password' => Hash::make('userRanggacihuy'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'Muhammad Thoriq Ali Aljundi',
            'username' => 'Thoriq',
            'email' => 'thoriq@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'kepala_departemen',
            'password' => Hash::make('userThoriq'),
        ]);

        /* KEPALA DEPARTEMENT END */
        /* =================================== */

        /* HR START */

        DB::table('users')->insert([
            'full_name' => 'Jason Devito',
            'username' => 'Jason',
            'email' => 'jason@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'hr',
            'password' => Hash::make('userJason'),
        ]);

        /* HR END */
        /* =================================== */

        /* SUPER ADMIN START */

        DB::table('users')->insert([
            'full_name' => 'Atma Fauzilla',
            'username' => 'Atma',
            'email' => 'atma@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'super_admin',
            'password' => Hash::make('userAtma'),
        ]);

        /* SUPER ADMIN END */
        /* ===================================== */

        /* ADMINN VENDOR START */

        DB::table('users')->insert([
            'full_name' => 'Zahrah Faradila',
            'username' => 'Zahrah',
            'email' => 'zahrah@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'admin_vendor',
            'password' => Hash::make('userZahrah'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'Zahrah Faradila2',
            'username' => 'Zahrah2',
            'email' => '2zahrah@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'admin_vendor',
            'password' => Hash::make('userZahrah2'),
        ]);

        /* ADMIN VENDOR END */

        /* ================================ */

        /* KARYAWAN START */
        DB::table('users')->insert([
            'full_name' => 'Atma Karyawan',
            'username' => 'KaryawanAtma',
            'email' => '2atma@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'karyawan',
            'password' => Hash::make('userAtma'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'Rangga Karyawan',
            'username' => 'KaryawanRangga',
            'email' => '2rangga@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'karyawan',
            'password' => Hash::make('userRangga'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'JasonKaryawan',
            'username' => 'Jason',
            'email' => '2jason@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'karyawan',
            'password' => Hash::make('userJason'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'ZahraKaryawan',
            'username' => 'Zahra',
            'email' => '3zahra@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'karyawan',
            'password' => Hash::make('userZahra'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'ThoriqKaryawan',
            'username' => 'Thoriq',
            'email' => '2Thoriq@gmail.com',
            'phone_number' => '081275796452' ,
            'status' => 'active',
            'role' => 'karyawan',
            'password' => Hash::make('userThoriq'),
        ]);
        /* KARYAWAN END */

    }
}
