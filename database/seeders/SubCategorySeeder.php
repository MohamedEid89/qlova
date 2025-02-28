<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        $subCategories = [
            ['name' => 'Laptops', 'category_id' => $categories->firstWhere('slug', 'electronics')->id, 'slug' => 'laptops'],
            ['name' => 'T-shirts', 'category_id' => $categories->firstWhere('slug', 'clothing')->id, 'slug' => 'tshirts'],
            ['name' => 'Fiction', 'category_id' => $categories->firstWhere('slug', 'books')->id, 'slug' => 'fiction'],
        ];

        foreach ($subCategories as $subCategory) {
            SubCategory::create($subCategory);
        }
    }
}
