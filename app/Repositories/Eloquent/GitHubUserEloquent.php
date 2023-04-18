<?php

namespace App\Repositories\Eloquent;

use App\Models\GitHubUser;
use App\Repositories\BaseRepositoryEloquent;
use App\Repositories\Contracts\GitHubUserRepository;

class GitHubUserEloquent extends BaseRepositoryEloquent implements GitHubUserRepository
{
    public function model(): string
    {
        return GitHubUser::class;
    }
}
