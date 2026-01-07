<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'livewire/*',
        ]);

        $middleware->web(append: [
            \App\Http\Middleware\CheckSiteStatus::class,
            \App\Http\Middleware\LogActivity::class,
            \App\Http\Middleware\HandleInertiaRequests::class,
        ]);

        $middleware->api(append: [
            \App\Http\Middleware\LogActivity::class,
        ]);

        $middleware->alias([
            '2fa' => \App\Http\Middleware\TwoFactor::class,
            'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
            'isAdmin' => \App\Http\Middleware\AdminMiddleware::class,
            'logsActivity' => \App\Http\Middleware\LogActivity::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
