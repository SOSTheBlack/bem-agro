<?php

namespace App\Http\Controllers\Users\GitHub;

use Livewire\Component;

abstract class GitHubController extends Component
{
    public function boot(): void
    {
        view()->share('breadcrumbs', $this->breadcrumbs());
    }
}
