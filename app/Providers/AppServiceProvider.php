<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerLocalProviders();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    private function registerLocalProviders(): void
    {
        if ($this->app->isLocal()) {
            $this->registerIdeHelperProvider();
        }
    }

    private function registerIdeHelperProvider(): void
    {
        $this->app->register(IdeHelperServiceProvider::class);
    }
}
