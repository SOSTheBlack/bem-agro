<?php

namespace App\Http\Controllers\Users\GitHub;

use Illuminate\View\View;

use function view;

final class ListController extends GitHubController
{
    public function render(): View
    {
        return view('pages.users.git-hub.list');
    }

    protected function breadcrumbs(): array
    {
        return [
            ['link' => "/", 'name' => "Dasboard"],
            ['link' => "javascript:void(0)", 'name' => "Usuários"],
            ['name' => "GitHub"],
        ];
    }
}
