<?php

namespace Ariwira\Orangtua;

use Ariwira\Orangtua\Http\Middleware\Authenticate;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class OrangTuaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
	    $this->mergeConfigFrom(
		    __DIR__ . '/../config/auth.php', 'auth'
	    );
	    $this->loadViewsFrom(__DIR__.'/../resources/views', 'orangtua');
	    $this->loadRoutesFrom(__DIR__.'/route.php');
	    $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
	    $this->publishes([
		    __DIR__.'/../resources/views' => base_path('resources/views/vendor/ariwira'),
	    ], 'views');
	    $this->publishes([
		    __DIR__.'/../assets' => public_path('vendor/orangtua'),
	    ], 'public');
	    $this->publishes([
		    __DIR__.'/../config/orangtua.php' => config_path('orangtua.php')
	    ], 'config');
	    $kernel->prependMiddleware(Authenticate::class);
	    Orangtua::auth(function ($request) {
		    return Auth::guard('orangtua')->check();
	    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerController();
    }

    protected function registerController()
    {
	    $this->app->make('Ariwira\Orangtua\Http\Controllers\LoginController');
	    $this->app->make('Ariwira\Orangtua\Http\Controllers\AdminCampaignController');
	    $this->app->make('Ariwira\Orangtua\Http\Controllers\AdminDashboardController');
	    $this->app->make('Ariwira\Orangtua\Http\Controllers\AdmissionController');
    }
}
