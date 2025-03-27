<?php

use App\Http\Middleware\Auth\EnsureAuthenticated;
use App\Http\Middleware\Auth\EnsureGuest;
use App\Http\Middleware\Auth\Role\HasRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'guest' => EnsureGuest::class,
            'authenticated' => EnsureAuthenticated::class,
            'role' => HasRole::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle exceptions here
    })->create();
