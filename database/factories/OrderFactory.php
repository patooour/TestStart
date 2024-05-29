<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::pluck('id')->toArray();
        $randuser = array_rand($userId);
        return [
            'name' => fake()->text(30),
            'address' => fake()->address(),
            'fees' => fake()->randomFloat(2,0,100),
            'phoneNumber' => fake()->phoneNumber(),
            'is_delivered' => fake()->boolean(),
            'is_completed' => true,
             'email' => fake()->safeEmail(),
            'user_id' => $userId[$randuser],
        ];
    }
}
