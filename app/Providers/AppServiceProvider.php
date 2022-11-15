<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\UserLogin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Sanctum::ignoreMigrations();
        \Laravel\Sanctum\Sanctum::ignoreMigrations();

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        Paginator::useBootstrapFive();

        Gate::define('superadmin', function(UserLogin $user){
            return $user->access === 'Superadmin';
        });

        Gate::define('admin', function(UserLogin $user){
            return $user->access === 'Admin';
        });

    }
    
}
