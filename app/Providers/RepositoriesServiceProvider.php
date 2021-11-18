<?php

namespace App\Providers;

use App\Interfaces\ForgotPasswordRepositoryInterface;
use App\Repositories\ForgotPasswordRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ForgotPasswordRepositoryInterface::class, function($app){
            return $app->make(ForgotPasswordRepository::class);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
