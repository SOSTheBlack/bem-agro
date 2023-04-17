<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\BaseRepositoryEloquent;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryEloquent extends BaseRepositoryEloquent implements UserRepository
{
    public function model(): string
    {
        return User::class;
    }
}
