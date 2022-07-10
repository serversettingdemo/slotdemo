<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        // Implicitly grant "Super-Admin" role all permission checks using can()
        Gate::define('admin', function (User $user) {
        if ($user->hasRole('admin')) {
            return true;
        }

        if ($user->is_admin === "true") {
            return $user->is_admin;
        }

    });
    }
}
