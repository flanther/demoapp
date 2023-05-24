<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ActorRepositoryInterface;
use App\Repositories\ActorRepository;

class ActorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ActorRepositoryInterface::class, ActorRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
