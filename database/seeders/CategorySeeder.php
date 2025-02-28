<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'image' => 'electronics.jpg', 'slug' => 'electronics'],
            ['name' => 'Clothing', 'image' => 'clothing.jpg', 'slug' => 'clothing'],
            ['name' => 'Books', 'image' => 'books.jpg', 'slug' => 'books'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
