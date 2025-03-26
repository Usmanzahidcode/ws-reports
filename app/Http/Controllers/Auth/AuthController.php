<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function showLoginForm() {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->with('error', 'Invalid credentials.');
        }

        $request->session()->regenerate();
        return back()->with('success', 'You are now logged in.');
    }

    public function showRegisterForm() {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request) {
        $user = User::create($request->only([
            'first_name',
            'last_name',
            'email',
            'password',
        ]));

        Auth::login($user);

        return redirect()->route('home');
    }
}
