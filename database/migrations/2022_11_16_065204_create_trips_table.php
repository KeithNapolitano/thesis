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
        if(!Schema::hasTable('trips')){
            Schema::create('trips', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('route_id')->nullable();
                $table->unsignedBigInteger('seat_id')->nullable();
                $table->date('dates');
                $table->string('driver_name');
                $table->string('van_plate');
                $table->boolean('trip_status')->nullable();
                $table->integer('orig_fare')->nullable();
                $table->integer('extra_fare')->nullable();
                $table->boolean('driver_status')->nullable();
                $table->boolean('passenger_status')->nullable();
                $table->boolean('payment_status')->nullable();
                $table->boolean('supervisor_status')->nullable();
                $table->timestamps();

                //DELETES TRIPS IF MADELETE ANG USER:onDelete(cascade)
                //$table->foreign('user_id')->references('id')->on('users');
                $table->foreign('route_id')->references('id')->on('routes');
                $table->foreign('seat_id')->references('id')->on('seats');
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
        Schema::dropIfExists('trips');
    }
};
