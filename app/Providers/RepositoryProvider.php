<?php

namespace App\Providers;

use App\Repositories\BranchRepository;
use App\Repositories\Interfaces\BranchRepositoryInterfaces;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->bind(BranchRepositoryInterfaces::class, BranchRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
