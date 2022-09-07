<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_has_products', function (Blueprint $table) {
            $table->bigInteger('categories_id')->unsigned();
            $table->bigInteger('products_id')->unsigned();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_has_products');
    }
}
