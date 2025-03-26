<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response as ResponseCodes;

class EnsureAuthenticated {
    public function handle(Request $request, Closure $next): Response {
        if (Auth::check()) {
            return $next($request);
        }

        abort(ResponseCodes::HTTP_UNAUTHORIZED);
    }
}
