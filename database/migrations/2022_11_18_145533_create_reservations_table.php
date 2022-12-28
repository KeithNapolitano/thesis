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
                $table->unsignedBigInteger('route_id');
                $table->unsignedBigInteger('passenger_id');
                $table->integer('tickets');
                $table->unsignedBigInteger('payment_id');
                $table->boolean('present');
                $table->string('seat');
                $table->string('ref_num');
                $table->timestamps();

                $table->foreign('route_id')->references('id')->on('routes');
                $table->foreign('passenger_id')->references('id')->on('passengers');
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
