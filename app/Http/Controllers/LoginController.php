<?php

namespace App\Http\Controllers;
use App\Service\AuthService;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return AuthService::login($request);
    }
}
