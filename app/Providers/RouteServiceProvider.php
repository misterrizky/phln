<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = '';

    public const HOME = '/';
    public const DASHBOARD = '/office/dashboard';
    public function boot()
    {
        parent::boot();
    }
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapAppRoutes();
        $this->mapWebRoutes();
    }
    protected function mapAppRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/app/phln.php'));
    }
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/app/web.php'));
    }
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
