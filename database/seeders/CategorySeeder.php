<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate(
            ['name' => 'Electronics'],
            ['description' => 'Electronic products']
        );

        Category::firstOrCreate(
            ['name' => 'Stationery'],
            ['description' => 'Office and school supplies']
        );

        Category::firstOrCreate(
            ['name' => 'Furniture'],
            ['description' => 'Office furniture']
        );
    }
}
