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
        Schema::create('addtocards', function (Blueprint $table) {
            $table->id();
          
            $table->unsignedBigInteger('product_id');
            $table->integer('customar_id');
            $table->string('size')->nullable();
            $table->integer('quantity')->default(1);
            $table->string('total_price');
           $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_id');
    }
};
