<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
    }
}
