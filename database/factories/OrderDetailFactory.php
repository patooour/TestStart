<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $productId = Product::pluck('id')->toArray();
        $randproduct = array_rand($productId);

        $orderId = Order::pluck('id')->toArray();
        $randorder = array_rand($orderId);
        return [
            'price' => fake()->randomFloat(2,1,2000),
            'discount' => fake()->randomFloat(2,0,100),
            'amount' => fake()->randomDigit(),
            'product_id' => $productId[$randproduct],
            'order_id' => $orderId[$randorder],

        ];
    }
}
