<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('image')->default('product_default.jpg');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('image_gallery')->nullable()->default('gallery.jpg');
            $table->string('producte_code')->unique();
            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('product_stock')->default(1);
            $table->unsignedInteger('alart_quantity')->default(1);
            $table->longText('long_description')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('aditional_info')->nullable();
            $table->unsignedInteger('product_rating')->nullable()->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
