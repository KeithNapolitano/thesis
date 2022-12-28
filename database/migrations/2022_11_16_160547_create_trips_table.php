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
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('route_id');
                $table->date('dates');
                $table->unsignedBigInteger('driver_id');
                $table->unsignedBigInteger('van_id');
                $table->integer('seats_left');
                $table->integer('num_pass');
                $table->boolean('trip_status');
                $table->integer('orig_fare');
                $table->integer('extra_fare');
                $table->timestamps();

                //DELETES TRIPS IF MADELETE ANG USER:onDelete(cascade)
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('route_id')->references('id')->on('routes');
                $table->foreign('driver_id')->references('id')->on('drivers');
                $table->foreign('van_id')->references('id')->on('vans');
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
