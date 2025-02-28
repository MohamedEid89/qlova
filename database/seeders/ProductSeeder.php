<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', 'vendor')->get();
        $categories = Category::all();
        $brands = Brand::all();

        foreach ($users as $user) {
            $product = Product::create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
                'brand_id' => $brands->random()->id,
                'name' => 'Sample Product',
                'featured_image' => 'sample.jpg',
                'short_description' => 'This is a sample product.',
                'long_description' => 'This is a detailed description of the sample product.',
                'price' => rand(10, 1000),
                'discount_price' => rand(1, 100),
                'publish_date_time' => now(),
                'slug' => 'sample-product-' . rand(100, 999),
            ]);

            // Optionally associate the product with an inventory record
            Inventory::create([
                'product_id' => $product->id,
                'availability' => 'instock',
                'stock_quantity' => rand(10, 100),
                'low_stock_no' => 5,
                'SKU' => 'SKU-' . rand(1000, 9999),
            ]);
        }
    }
}
