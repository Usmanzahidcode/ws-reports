<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
    public function showLoginForm() {
        //
    }

    public function login() {}

    public function showRegisterForm() {
        return view('pages.auth.register');
    }

    public function register() {}

}
