<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tagNames = [
            'Electronics',
            'Computer',
            'Accessories',
            'Office',
        ];

        $tags = collect($tagNames)->map(function ($name) {
            return Tag::firstOrCreate(['name' => $name]);
        });

        Product::all()->each(function ($product) use ($tags) {
            $selectedTags = $tags
    ->random(min(2, $tags->count()))
    ->pluck('id')
    ->all();

            $product->tags()->syncWithoutDetaching($selectedTags);
        });
    }
}
