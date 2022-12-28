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
        if(!Schema::hasTable('payments')){
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('passenger_id');
                $table->unsignedBigInteger('trip_id');
                $table->integer('amount');
                $table->timestamps();

                $table->foreign('passenger_id')->references('id')->on('passengers');
                $table->foreign('trip_id')->references('id')->on('trips');
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
        Schema::dropIfExists('payments');
    }
};
