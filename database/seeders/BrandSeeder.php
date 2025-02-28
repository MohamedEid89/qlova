<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'image' => 'apple.jpg', 'slug' => 'apple'],
            ['name' => 'Samsung', 'image' => 'samsung.jpg', 'slug' => 'samsung'],
            ['name' => 'Nike', 'image' => 'nike.jpg', 'slug' => 'nike'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
