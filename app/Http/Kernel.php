<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Global middleware áp dụng cho mọi request.
     */
    protected $middleware = [
        \App\Http\Middleware\TrustHosts::class,
=======
=======
>>>>>>> origin/nguyen-van-thanh
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
<<<<<<< HEAD
>>>>>>> origin/nguyen-tuan-vu
=======
>>>>>>> origin/nguyen-van-thanh
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
<<<<<<< HEAD
<<<<<<< HEAD

        // Cross-cutting của bạn
        \App\Http\Middleware\ForceJson::class,
        \App\Http\Middleware\RequestId::class,
        \App\Http\Middleware\RequestTimer::class,
    ];

    /**
     * Middleware groups.
=======
=======
>>>>>>> origin/nguyen-van-thanh
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
<<<<<<< HEAD
>>>>>>> origin/nguyen-tuan-vu
=======
>>>>>>> origin/nguyen-van-thanh
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
<<<<<<< HEAD
<<<<<<< HEAD
            'request.corr',
        ],

        'api' => [
            // Quan trọng khi tách SPA + Sanctum
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\RequestId::class,
            \App\Http\Middleware\RequestCorrelation::class,
	        \App\Http\Middleware\RequestTimer::class,
            'request.corr',
=======
=======
>>>>>>> origin/nguyen-van-thanh
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
<<<<<<< HEAD
>>>>>>> origin/nguyen-tuan-vu
=======
>>>>>>> origin/nguyen-van-thanh
        ],
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Route middleware có thể gắn ở route/group.
=======
=======
>>>>>>> origin/nguyen-van-thanh
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
<<<<<<< HEAD
>>>>>>> origin/nguyen-tuan-vu
=======
>>>>>>> origin/nguyen-van-thanh
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
>>>>>>> origin/nguyen-tuan-vu
=======
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
>>>>>>> origin/nguyen-van-thanh
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
<<<<<<< HEAD
<<<<<<< HEAD
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        'basic.env' => \App\Http\Middleware\BasicEnvAuth::class,
        // của bạn
        'admin' => \App\Http\Middleware\AdminOnly::class,
        'force.json' => \App\Http\Middleware\ForceJson::class,
        'request.corr' => \App\Http\Middleware\RequestCorrelation::class,
        'company.scope' => \App\Http\Middleware\CompanyScope::class,
    ];
    protected $middlewareAliases = [
        

        'admin' => \App\Http\Middleware\CheckAdmin::class,

=======
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
>>>>>>> origin/nguyen-tuan-vu
=======
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
>>>>>>> origin/nguyen-van-thanh
    ];
}
