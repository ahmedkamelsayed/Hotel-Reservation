<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\serviceProvider;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');  //255 char
            $table->string('lastName');
            $table->string('email'); 
            $table->string('roomType'); 
            $table->string('checkIntime'); 
            $table->string('timeIn'); 
            $table->string('checkOuttime'); 
            $table->string('timeOut'); 
            $table->int('numOfguests'); 
            $table->timestamp();
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
