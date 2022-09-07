<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_has_products', function (Blueprint $table) {
            $table->bigInteger('purchases_id')->unsigned();
            $table->bigInteger('products_id')->unsigned();

            $table->foreign('purchases_id')->references('id')->on('purchases')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('purchase_has_products');
    }
}
