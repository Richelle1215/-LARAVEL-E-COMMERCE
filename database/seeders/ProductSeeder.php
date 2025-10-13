<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create(['name' => 'Test Category', 'status' => 'active']);
        Product::create([
            'name' => 'Test Product',
            'slug' => 'test-product',
            'category_id' => $category->id,
            'price' => 99.99,
            'stock' => 10,
            'status' => true,
            'description' => 'Test desc',
        ]);
    }
}
