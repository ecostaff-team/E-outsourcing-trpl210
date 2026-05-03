<?php

namespace Database\Seeders;
use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::query()
            ->where('role', UserRole::Hr->value)
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
