<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Todo\TodoRepositoryContract;
use App\Repositories\Todo\EloquentTodoRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            TodoRepositoryContract::class,
            EloquentTodoRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
