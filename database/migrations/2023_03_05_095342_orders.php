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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customar_id');
            
            $table->integer('amount');
            $table->string('status')->default('unpaid');
            $table->integer('customar_number')->nullable();
            $table->string('customar_email');
            $table->string('customar_name');
            $table->string('customar_country');
            $table->string('customar_streat');
            $table->string('customar_district');
            $table->string('customar_upozila');
            $table->string('customar_village');
            $table->string('transaction_id');
            $table->string('currency');
            $table->integer('zip')->nullable();
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
        //
    }
};
