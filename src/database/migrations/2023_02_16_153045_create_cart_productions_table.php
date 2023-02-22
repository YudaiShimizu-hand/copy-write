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
        Schema::create('cart_productions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('production_id')->comment('商品ID');
            $table->foreign('production_id')->references('id')->on('productions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('cart_id')->comment('カートID');
            $table->foreign('cart_id')->references('id')->on('carts')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('cart_productions');
    }
};
