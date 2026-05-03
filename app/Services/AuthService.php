<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(string $email, string $password): array
    {
        if (!Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return [
                'success' => false,
                'message' => 'Email atau password salah'
            ];
        }

        $user = Auth::user();

        return [
            'success' => true,
            'user' => $user,
            'redirect' => $this->getRedirectByRole($user->role->value)
        ];
    }

    public function getRedirectByRole(string $role): string
    {
        return match ($role) {
            'admin_vendor' => '/admin-outsourcing/dashboard',
            'hr' => '/hr/dashboard',
            'super_admin' => '/super-admin/dashboard',
            'kepala_departemen' => '/kepala-departement/dashboard',
            default => '/dashboard'
        };
    }
}
