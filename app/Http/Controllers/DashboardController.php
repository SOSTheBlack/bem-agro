<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class DashboardController extends BaseController
{
    public function render(): View
    {
        return view('pages.dashboard');
    }

    protected function breadcrumbs(): array
    {
        return [
            ['link' => "/", 'name' => __('Dashboard')],
        ];
    }
}
