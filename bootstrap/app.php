<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SentinelUser;
use App\Http\Middleware\SentinelAdmin;
use Sentry\Laravel\Integration;
use Tymon\JWTAuth\Http\Middleware\Authenticate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using: function () {
            Route::middleware('web')
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/web.php'));
            //Api routes    
            Route::prefix('api')
            ->middleware('api')
            ->namespace('App\Http\Controllers/Api') // optional
            ->group(base_path('routes/api.php'));
        },
    )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user' => SentinelUser::class,
            'admin' => SentinelAdmin::class,
            'auth:api' => Authenticate::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        Integration::handles($exceptions);
    })->create();
