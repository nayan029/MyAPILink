<?php

namespace App\Providers;

use App\Interfaces\ApplyJobRepositoryInterface;
use App\Interfaces\ContactRepositoryInterface;
use App\Interfaces\EstablishmentRepositoryInterface;
use App\Interfaces\ForgotPasswordRepositoryInterface;
use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\JobVacanciesRepositoryInterface;
use App\Interfaces\CandidateRepositoryInterface;
use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\ManagerRepositoryInterface;
use App\Interfaces\SkillRepositoryInterface;
use App\Interfaces\PartnerRepositoryInterface;
use App\Interfaces\RegistrationRepositoryInterface;
use App\Interfaces\WidgetRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\JobRepositoryInterface;
use App\Repositories\ApplyJobRepository;
use App\Repositories\ContactRepository;
use App\Repositories\EstablishmentRepository;
use App\Repositories\ForgotPasswordRepository;
use App\Repositories\HomeRepository;
use App\Repositories\JobVacanciesRepository;
use App\Repositories\ManagerRepository;
use App\Repositories\SkillRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\RegistrationRepository;
use App\Repositories\WidgetRepository;
use App\Repositories\UserRepository;
use App\Repositories\JobRepository;
use App\Repositories\CandidateRepository;
use App\Repositories\GalleryRepository;
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
        $this->app->bind(RegistrationRepositoryInterface::class, function ($app) {
            return $app->make(RegistrationRepository::class);
        });
        $this->app->bind(EstablishmentRepositoryInterface::class, function ($app) {
            return $app->make(EstablishmentRepository::class);
        });

        $this->app->bind(JobVacanciesRepositoryInterface::class, function ($app) {
            return $app->make(JobVacanciesRepository::class);
        });

        $this->app->bind(UserRepositoryInterface::class, function ($app) {
            return $app->make(UserRepository::class);
        });

        $this->app->bind(JobRepositoryInterface::class, function ($app) {
            return $app->make(JobRepository::class);
        });


        $this->app->bind(CandidateRepositoryInterface::class, function ($app) {
            return $app->make(CandidateRepository::class);
        });

        $this->app->bind(ApplyJobRepositoryInterface::class, function ($app) {
            return $app->make(ApplyJobRepository::class);
        });

        $this->app->bind(GalleryRepositoryInterface::class, function ($app) {
            return $app->make(GalleryRepository::class);
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
