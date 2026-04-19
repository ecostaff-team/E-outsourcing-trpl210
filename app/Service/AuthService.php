<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public static function login($request)
    {
        // 1. Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Cari user
        $user = User::where('email', $request->email)->first();

        // 3. Cek user
        if (!$user) {
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        // 4. Cek password
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        // 5. Simpan session
        session([
            'user_id' => $user->id,
            'role' => $user->role
        ]);

        // 6. Redirect sesuai role
        if ($user->role === 'hr') {
            return redirect('/user-hr');
        } elseif ($user->role === 'karyawan') {
            return redirect('/user-hr');
        } elseif ($user->role === 'super_admin') {
            return redirect('/super-admin');
        } elseif ($user->role === 'kepala_departemen') {
            return redirect('/kepala-departemen');
        }

        return redirect('/');
    }
}
