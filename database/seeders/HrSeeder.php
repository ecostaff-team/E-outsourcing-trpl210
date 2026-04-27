<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hr;
use App\Models\User;

class HrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::where('role', 'admin_vendor')->first();

        Hr::create([
            'user_id' => $userAdmin->id,
        ]);

    }
}
