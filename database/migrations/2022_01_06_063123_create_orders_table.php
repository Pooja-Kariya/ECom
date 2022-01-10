<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user')->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('SET NULL');
            $table->unsignedBigInteger('product')->nullable();
            $table->foreign('product')->references('id')->on('products')->onDelete('SET NULL');
            $table->integer('price');
            $table->float('tax');
            $table->float('delivery_charges');
            $table->integer('quantity');
            $table->float('total');
            $table->string('status');
            $table->integer('tracking_number');
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
        Schema::dropIfExists('orders');
    }
}
