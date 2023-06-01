<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('order_id',12);
            $table->string('name',60);
            $table->integer('member');
            $table->text('person');
            $table->string('busid',12);
            $table->string('booking_date',10);
            $table->text('source');
            $table->text('destination');
            $table->string('email',60);
            $table->string('phone',15);
            $table->text('address');
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
        Schema::dropIfExists('booking');
    }
}
