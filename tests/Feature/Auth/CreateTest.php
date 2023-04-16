<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_create_new_user_with_success()
    {
        $this->assertDatabaseEmpty('users');

        $password = $this->faker->password(8);
        $newUser = [
            'name' => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'password' => $password,
            'password_confirmation' => $password
        ];

        $this->post(route('register'), $newUser);

        $this
            ->assertDatabaseCount('users', 1)
            ->assertDatabaseHas('users', [
                'name' => $newUser['name'],
                'email' => $newUser['email'],
            ]);
    }

    public function test_observer_create_new_user_with_success()
    {
        $this->assertDatabaseEmpty('users');

        $password = $this->faker->password();
        $newUser = [
            'name' => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'password' => $password,
            'password_confirmation' => $password
        ];

        $this->post(route('register'), $newUser);

        $user = User::whereEmail($newUser['email'])->firstOrFail();

        $this->assertNotEmpty($user->avatar);
    }
}
