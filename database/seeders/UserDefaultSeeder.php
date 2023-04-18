<?php

namespace Database\Seeders;

use App\Repositories\Contracts\UserRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDefaultSeeder extends Seeder
{
    private const EMAIL_ADMIN = 'sostheblack@gmail.com';

    public function __construct(private UserRepository $userRepository)
    {
        //
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->userRepository->firstOrCreate($this->makeAttributes());
    }

    private function makeAttributes(): array
    {
        return [
            'name' => 'Jean C. Garcia',
            'email' => self::EMAIL_ADMIN,
            'password' => Hash::make('ddd'),
            'email_verified_at' => now()
        ];
    }
}
