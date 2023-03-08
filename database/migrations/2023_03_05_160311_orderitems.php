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
            $table->Integer('order_id');
            $table->integer('product_id');
            $table->integer('vandor_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('size')->nullable();
            $table->integer('subtotal');
           $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_id');
    }
};
