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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
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

            $table->foreign('route_id')->references('id')->on('routes')->cascadeOnUpdate();
            $table->foreign('driver_id')->references('id')->on('drivers')->cascadeOnUpdate();
            $table->foreign('van_id')->references('id')->on('vans')->cascadeOnUpdate();


            // $table->id();
            // $table->string('destination');
            // $table->date('dates');
            // $table->string('driver');
            // $table->string('van');
            // $table->integer('seats_left');
            // $table->integer('num_pass');
            // $table->boolean('trip_status');
            // $table->integer('orig_fare');
            // $table->integer('extra_fare');
            // $table->timestamps();
        });
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
