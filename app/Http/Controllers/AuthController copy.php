<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function login(Request $request, AuthService $authService)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = $authService->login(
            $request->email,
            $request->password
        );

        if (!$user) {
            return back()->withErrors([
                'login' => 'Email atau password salah'
            ]);
        }

        return redirect(
            $authService->getRedirectByRole($user->role)
        );
    }
}
