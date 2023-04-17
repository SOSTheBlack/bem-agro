<?php

namespace App\Http\Controllers\Users\GitHub;

use App\Repositories\Contracts\UserRepository;
use Illuminate\View\View;

use Livewire\WithPagination;
use function view;

final class ListController extends GitHubController
{
    use WithPagination;

    public function render(UserRepository $userRepository): View
    {
//        dd($userRepository->paginate());

        return view('pages.users.git-hub.list', ['gitHubUsers' => $userRepository->paginate()]);
    }

    protected function breadcrumbs(): array
    {
        return [
            ['link' => "/", 'name' => __('Dashboard')],
            ['link' => "javascript:void(0)", 'name' => __('Users')],
            ['name' => __("GitHub")],
        ];
    }
}
