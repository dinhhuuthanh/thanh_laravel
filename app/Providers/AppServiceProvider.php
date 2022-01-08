<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        //Cach 1
//        $this->app->singleton(
//            \App\Repositories\User\UserRepositoryInterface::class,
//            \App\Repositories\User\UserRepository::class
//        );

        //Cach 2
        $repositories = [
            'User\UserRepositoryInterface' => 'User\UserRepository',
        ];

        foreach ($repositories as $key => $val) {
            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$val");
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
