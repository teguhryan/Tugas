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
            $table->increments('id',10)->unsigned();
            $table->string('name', 191);
            $table->string('description', 191);
            $table->string('stock', 191);
            $table->string('price', 191);
            // $table->integer('category_id')->unsigned();
            $table->timestamps();
        });

        // Schema::table('products', function (Blueprint $table) {
        //     $table->foreign('category_id')->references('id')->on('categories')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
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
