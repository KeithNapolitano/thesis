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
        if(!Schema::hasTable('reservations')){
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id'); //FOR COMMUTERS
                $table->unsignedBigInteger('trip_id');
                $table->integer('tickets');
                $table->unsignedBigInteger('payment_id');
                $table->boolean('present')->nullable();
                $table->string('seat')->nullable();
                $table->string('ref_num');
                $table->timestamps();

                $table->foreign('trip_id')->references('id')->on('trips');
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('payment_id')->references('id')->on('payments');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
