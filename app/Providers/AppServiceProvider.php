<?php

namespace App\Providers;

use App\Http\Repositories\Course\Impl\CourseRepositoryImpl;
use App\Http\Repositories\Course\CourseRepository;
use App\Http\Services\Course\Impl\CourseServiceImpl;
use App\Http\Services\Course\CourseService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CourseService::class, CourseServiceImpl::class);
        $this->app->bind(CourseRepository::class, CourseRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
