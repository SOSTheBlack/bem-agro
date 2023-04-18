<?php

namespace App\Providers;

use App\Repositories\Contracts\GitHubUserRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Eloquent\GitHubUserEloquent;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(GitHubUserRepository::class, GitHubUserEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
