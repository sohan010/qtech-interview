<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    public function definition()
    {
//        return [
//            'name' => fake()->name(),
//            'email' => fake()->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
//        ];


         return  [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'city' => fake()->city(),
                'birthday' => fake()->date(),
                'phone' => fake()->phoneNumber(),
                'age' => rand(1,100),
                'gender' => rand(0,1),
                'income' => rand(10000,100000),
                'status' => rand(0,1),
                'password' => '12345678'
            ];

    }


    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
