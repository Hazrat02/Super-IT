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
        
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->unsignedBigInteger('order_id');
            $table->integer('product_id');
            $table->integer('vandor_id');
            $table->integer('customer_id');
            $table->string('size')->nullable();
            $table->integer('subtotal');
           $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_id');
    }
};
