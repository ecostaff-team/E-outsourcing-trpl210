<?php

namespace Database\Factories;

/*  */
use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * nama password yang digunakan untuk membuat user baru dengan factory.
     */
    protected static ?string $password;

    /**
     * definisi dari model default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'nomor_tlp' => fake()->phoneNumber(),
            'status' => 'active',
            'username' => fake()->unique()->userName(),
            'role' => UserRole::Karyawan->value, // default
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function superAdmin()
    {
        return $this->state(fn () => [
            'role' => UserRole::SuperAdmin->value,
        ]);
    }

    public function adminVendor()
    {
        return $this->state(fn () => [
            'role' => UserRole::AdminVendor->value,
        ]);
    }

    public function hr()
    {
        return $this->state(fn () => [
            'role' => UserRole::Hr->value,
        ]);
    }

    public function kepalaDepartemen()
    {
        return $this->state(fn () => [
            'role' => UserRole::KepalaDepartemen->value,
        ]);
    }

    public function inactive()
    {
        return $this->state(fn () => [
            'status' => 'inactive',
        ]);
    }
}
