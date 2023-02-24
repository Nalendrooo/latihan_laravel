<?php

namespace App\Providers;

// use Illuminate\Auth\Access\Gate;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;



class AppServiceProvider extends ServiceProvider
{
    // protected $policies = [
    //     'App\Model' => 'App\Policies\ModelPolicy',
    // ];
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
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('isSiswa', function ($user) {
            return $user->role == 'siswa';
        });
        Gate::define('isAdminSiswa', function ($user) {
            return $user->role == 'siswa' or 'admin';
        });
    }
}
