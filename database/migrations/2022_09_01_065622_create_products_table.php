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
            $table->string('name');
            $table->string('code');
            $table->foreignId('product_categories_id')->references('id')->on('product_categories');
            $table->decimal('price');
            $table->decimal('purchase_price');
            $table->string('short_description');
            $table->string('description');
            $table->integer('status');
            $table->integer('new_product');
            $table->integer('best_seller');
            $table->integer('featured');
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
