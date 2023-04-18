<?php

namespace App\Http\Controllers\Users\GitHub;

use App\Repositories\Contracts\GitHubUserRepository;
use Illuminate\View\View;

use Livewire\WithPagination;
use function view;

final class ListController extends GitHubController
{
    use WithPagination;

    public function render(GitHubUserRepository $gitHubUserRepository): View
    {
        return view('pages.users.git-hub.list', ['gitHubUsers' => $gitHubUserRepository->paginate()]);
    }

    protected function breadcrumbs(): array
    {
        return [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['name' => __('Users')],
            ['name' => __("GitHub")],
        ];
    }
}
