<?php

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
