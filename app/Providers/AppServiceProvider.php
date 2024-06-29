<?php

namespace App\Providers;

use App\Repositories\Contracts\BasicOperation;
use App\Repositories\Implementations\BasicOperationImplementation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BasicOperation::class, BasicOperationImplementation::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
