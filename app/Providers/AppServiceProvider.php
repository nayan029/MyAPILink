<?php

namespace App\Providers;

use App\Interfaces\HomeRepositoryInterface;
use App\Models\Contact;
use App\Models\Partner;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {
            $data['contact'] = Contact::first();
            $data['partners'] = Partner::get();
            $view->with($data);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
