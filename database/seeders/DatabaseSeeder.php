<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ImageTableseeder::class);
        $this->call(CategoriesTableseeder::class);
        $this->call(UsersTableseeder::class);
        $this->call(ProductsTableseeder::class);
        $this->call(OrdersTableseeder::class);
        $this->call(OrderDetailsTableseeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
