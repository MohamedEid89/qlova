<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Admin or Vendor
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('inventory_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('featured_image')->nullable();
            $table->json('images')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->dateTime('publish_date_time')->nullable()->default(now());
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->integer('reviews_count')->default(0);
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->string('focus_keywords')->nullable();
            $table->string('tags')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
