<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureAuthenticated {
    public function handle(Request $request, Closure $next): Response {
        if (!Auth::check()) {
            return redirect()->route('auth.login.form');
        }

        return $next($request);
    }
}
