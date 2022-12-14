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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('trip_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('passenger_id')->references('id')->on('passengers')->cascadeOnUpdate();
            $table->foreign('trip_id')->references('id')->on('trips')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
