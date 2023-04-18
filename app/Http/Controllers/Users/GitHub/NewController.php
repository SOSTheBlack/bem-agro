<?php

namespace App\Http\Controllers\Users\GitHub;

use App\Models\GitHubUser;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Component;

class NewController extends GitHubController
{
    use WithFaker;

    public string $search;

    public $gitHubUsers = [];

    public function render(): View
    {
        return view('pages.users.git-hub.new');
    }

    protected function breadcrumbs(): array
    {
        return [
            ['link' => "/", 'name' => __('Dashboard')],
            ['name' => __('Users')],
            ['link' => route('users.git-hub.list'), 'name' => __("GitHub")],
            ['name' => __('New register')]
        ];
    }

    public function updatedSearch(string $value)
    {
        #TODO: Pesquisar no github e voltar list em forma de card

        $this->gitHubUsers = GitHubUser::factory()->count(30)->make();

//        dd($this->gitHubUsers);
    }
}
