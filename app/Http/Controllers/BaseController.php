<?php

namespace App\Http\Controllers;

use Livewire\Component;

abstract class BaseController extends Component
{
    abstract protected function breadcrumbs(): array;

    public function boot(): void
    {
        view()->share('breadcrumbs', $this->breadcrumbs());
    }
}
