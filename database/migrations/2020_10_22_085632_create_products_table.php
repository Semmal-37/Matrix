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
            $table->integer('price');
            $table->integer('sponsor_id')->nullable();
            $table->integer('lvl_1')->nullable();
            $table->integer('lvl_2')->nullable();
            $table->integer('lvl_3')->nullable();
            $table->integer('lvl_4')->nullable();
            $table->integer('lvl_5')->nullable();
            $table->integer('lvl_6')->nullable();
            $table->integer('lvl_7')->nullable();
            $table->integer('lvl_8')->nullable();
            $table->integer('lvl_9')->nullable();
            $table->integer('lvl_10')->nullable();
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
