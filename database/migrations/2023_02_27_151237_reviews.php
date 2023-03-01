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
        Schema::create('reviews', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('user_id');
            $table->integer('reting');
            $table->string('name');
            $table->string('email');
         
            
         
            $table->string('comment');
          
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
           
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
        Schema::dropIfExists('product_id');
    }


};
