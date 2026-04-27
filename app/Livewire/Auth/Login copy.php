<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email harus valid.',
            'password.required' => 'Password wajib diisi.'
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->addError('login', 'Email atau password salah');
            return;
        }

        // Simpan ke session (sama seperti cara Anda sebelumnya)
        session([
            'user_id' => $user->id,
            'role' => $user->role
        ]);

        // Login menggunakan bawaan Laravel (optional tapi direkomendasikan)
        Auth::login($user);

        // Tentukan redirect URL
        $redirectUrl = '/';

        if ($user->role === 'hr') {
            $redirectUrl = '/user-hr';
        } elseif ($user->role === 'karyawan') {
            $redirectUrl = '/karyawan';
        } elseif ($user->role === 'super_admin') {
            $redirectUrl = '/super-admin';
        } elseif ($user->role === 'kepala_departemen') {
            $redirectUrl = '/kepala-departemen';
        }

        // Trigger event ke browser untuk menjalankan animasi
        $this->dispatch('login-success', url: $redirectUrl);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
