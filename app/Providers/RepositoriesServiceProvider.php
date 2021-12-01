<?php

namespace App\Providers;

use App\Interfaces\ContactRepositoryInterface;
use App\Interfaces\ForgotPasswordRepositoryInterface;
use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\ManagerRepositoryInterface;
use App\Interfaces\SkillRepositoryInterface;
use App\Interfaces\PartnerRepositoryInterface;
use App\Interfaces\WidgetRepositoryInterface;
use App\Repositories\ContactRepository;
use App\Repositories\ForgotPasswordRepository;
use App\Repositories\HomeRepository;
use App\Repositories\ManagerRepository;
use App\Repositories\SkillRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\WidgetRepository;
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
        $this->app->bind(ForgotPasswordRepositoryInterface::class, function ($app) {
            return $app->make(ForgotPasswordRepository::class);
        });

        $this->app->bind(WidgetRepositoryInterface::class, function ($app) {
            return $app->make(WidgetRepository::class);
        });

        $this->app->bind(SkillRepositoryInterface::class, function ($app) {
            return $app->make(SkillRepository::class);
        });

        $this->app->bind(PartnerRepositoryInterface::class, function ($app) {
            return $app->make(PartnerRepository::class);
        });

        $this->app->bind(ContactRepositoryInterface::class, function ($app) {
            return $app->make(ContactRepository::class);
        });

        $this->app->bind(HomeRepositoryInterface::class, function ($app) {
            return $app->make(HomeRepository::class);
        });

        
        $this->app->bind(ManagerRepositoryInterface::class, function ($app) {
            return $app->make(ManagerRepository::class);
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
