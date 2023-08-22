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
        Schema::create('shiping_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('product_qty')->nullable()->default(1);
            $table->integer('product_id');
            $table->string('product_img');
            $table->string('product_title');
            $table->integer('product_price');
            $table->boolean('confirmed')->nullable()->default(true);
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
        Schema::dropIfExists('shiping_carts');
    }
};
