<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_all.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_auth.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_consultation.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_cart.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_favorites.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_user_data.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        RateLimiter::for('search', function (Request $request) {
            $isValid = filter_var($request->ip(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
            return ($isValid)?Limit::perMinute(58)->by($request->ip()):Limit::perMinute(2)->by($request->ip());
        });

    }
}
