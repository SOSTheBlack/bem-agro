<?php

namespace App\Observers;

use App\Models\User;
use Throwable;

class UserObserver
{
    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public bool $afterCommit = true;

    /**
     * Handle the User "created" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function created(User $user): void
    {
        try {
            $user->avatar = getAvatar($user->email, $user->name);
            $user->saveOrFail();
        } catch (Throwable $e) {
            app('sentry')->captureException($e);
        }
    }
}
