<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $payload = $request->validated();

        $user = User::where('email', $payload['email'])->first();

        if (!$user || !Hash::check($payload['password'], $user->password)) {
            return redirect()->back()->withInput($payload)->withErrors(['email' => 'Invalid email or password']);
        }

        if ($user = Auth::attempt($payload)) {
            return redirect()->route('backoffice.index');
        } else {
            return redirect()->back()->withInput($payload)->withErrors(['email' => 'Invalid email or password']);
        }
    }
}
