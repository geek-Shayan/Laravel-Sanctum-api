<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->string('slug')->nullable();
            $table->string('sku')->nullable();
            $table->string('description')->nullable();
            $table->integer('available_quantity')->nullable();
            $table->decimal('purchase_price', 5, 2)->nullable();
            // $table->decimal('profit_range', 5, 2)->nullable();
            // $table->decimal('selling_price', 5, 2)->nullable();

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
}
