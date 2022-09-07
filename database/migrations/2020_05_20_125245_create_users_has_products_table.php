<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_products', function (Blueprint $table) {
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('products_id')->unsigned();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('users_has_products');
    }
}
