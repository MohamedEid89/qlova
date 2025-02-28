<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
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
