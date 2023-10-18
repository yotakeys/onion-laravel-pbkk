<?php

namespace App\Providers;

use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;
use App\Http\TA\Infrastructure\Repository\TopikRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(TopikRepositoryInterface::class, TopikRepository::class);
    }
}
