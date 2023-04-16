<?php

namespace Database\Seeders;

use Database\Factories\GitHubUserFactory;
use Illuminate\Database\Seeder;

class GitHubUserSeeder extends Seeder
{
    /**
     * @var GitHubUserFactory
     */
    private mixed $gitHubUserFactory;

    public function __construct()
    {
        $this->gitHubUserFactory = app(GitHubUserFactory::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->gitHubUserFactory->count(20)->create();
    }
}
