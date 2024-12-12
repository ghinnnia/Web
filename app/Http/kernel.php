protected $routeMiddleware = [
    // Middleware bawaan Laravel
    'auth' => \App\Http\Middleware\Authenticate::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    <!-- 'check.admin' => \App\Http\Middleware\CheckAdmin::class, -->
    <!-- 'isAdmin' => \App\Http\Middleware\IsAdmin::class, -->
    'CheckAdmin' => \App\Http\Middleware\CheckAdmin::class,

    // Tambahkan middleware lain jika diperlukan
];
