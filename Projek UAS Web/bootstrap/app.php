<?php

// use app\Console\Commands\GenerateDailyTimeSlots;
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
        $middleware->alias([
            // 'admin' => \App\Http\Middleware\AdminMiddleware::class,
            // 'karyawan' => \App\Http\Middleware\KaryawanMiddleware::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();