<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 100, 10000),
            'quantity' => fake()->numberBetween(1, 100),
            'category_id' => Category::inRandomOrder()->value('id'),
'supplier_id' => Supplier::inRandomOrder()->value('id'),
        ];
    }
}