<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->level === 'admin';
        });

        Gate::define('petugas', function (User $user) {
            return $user->level === 'petugas';
        });

        Gate::define('masyarakat', function (User $user) {
            return $user->level === 'masyarakat';
        });
    }
}
