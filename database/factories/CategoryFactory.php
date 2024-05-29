<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $ImageId = Image::pluck('id')->toArray();
        $randImage = array_rand($ImageId);

        return [
            'name' => fake()->unique()->text(100),
            'description' => fake()->text(1000),
            'image_id' => $ImageId[$randImage],
        ];
    }
}
