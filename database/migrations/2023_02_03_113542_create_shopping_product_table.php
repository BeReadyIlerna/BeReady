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
        Schema::create('shopping_card_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_id")->references("id")->on("products");
            $table->foreignId("shopping_cart_id")->references("id")->on("shopping_carts");
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
        Schema::dropIfExists('shopping_card_product');
    }
};
