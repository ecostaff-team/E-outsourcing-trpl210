<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Services\AuthService;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public $showPassword = false;

    public function togglePassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function login(AuthService $authService)
    {
        // 1. Validasi
        $this->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);

        // 2. Panggil service
        $result = $authService->login($this->email, $this->password);

        // 3. Kalau gagal
        if (!$result['success']) {
            $this->addError('login', $result['message']);
            return;
        }

        // 4. Kalau berhasil → kirim event ke frontend (animasi)
        $this->dispatch('login-success', url: $result['redirect']);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
