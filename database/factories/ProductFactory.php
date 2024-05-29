<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $catId = Category::pluck('id')->toArray();
        $randCat = array_rand($catId);

        $ImageId = Image::pluck('id')->toArray();
        $randImage = array_rand($ImageId);
        return [
            'name' => fake()->unique()->text(30),
            'price' => fake()->randomFloat(2,1,2000),
            'discount' => fake()->randomFloat(2,0,100),
            'amount' => fake()->numberBetween(1,1000),
            'is_available' => fake()->boolean(),
            'is_new' => fake()->boolean(),
            'image_id' => $ImageId[$randImage],
            'description' => fake()->unique()->text(1000),
            'category_id' => $catId[$randCat],
        ];
    }
}
