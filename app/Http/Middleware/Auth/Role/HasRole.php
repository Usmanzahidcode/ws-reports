<?php

namespace App\Http\Middleware\Auth\Role;

use App\Enums\User\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response as ResponseCodes;

class HasRole {
    public function handle(Request $request, Closure $next, UserRole $role): Response {
        if (Auth::user()->hasRole($role)) {
            return $next($request);
        }

        abort(ResponseCodes::HTTP_FORBIDDEN);
    }
}
