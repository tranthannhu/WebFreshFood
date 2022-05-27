<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('product_name');
            $table->string('sku');
            $table->double('origin_price', 12, 0);
            $table->double('sell_price', 12, 0);
            $table->integer('discount_percent')->default(0);
            $table->integer('discount_price')->nullable();
            $table->text('description');
            $table->text('short_description');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('quantity_sell')->default(0);
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->
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
