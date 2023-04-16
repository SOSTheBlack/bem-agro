<?php

namespace Database\Factories;

use App\Models\GitHubUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GitHubUser>
 */
class GitHubUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ref_id' => $this->faker->randomNumber(10),
            'username' => $this->faker->userName(),
            'full_name' => $this->faker->name(),
            'avatar_url' => $this->faker->imageUrl(),
            'url' => $this->faker->url(),
            'public_repos' => $this->faker->numerify(),
            'public_gists' => $this->faker->numerify(),
            'followers' => $this->faker->numerify(),
            'following' => $this->faker->numerify(),
            'start_at' => $this->faker->date()
        ];
    }
}
