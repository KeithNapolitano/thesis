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
        if(!Schema::hasTable('seats')){
            Schema::create('seats', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('trip_id')->nullable();
                $table->integer('seat1');
                $table->integer('seat2');
                $table->integer('seat3');
                $table->integer('seat4');
                $table->integer('seat5');
                $table->integer('seat6');
                $table->integer('seat7');
                $table->integer('seat8');
                $table->integer('seat9');
                $table->integer('seat10');
                $table->integer('seat11');
                $table->integer('seat12');
                $table->integer('seat13');
                $table->integer('seat14');
                $table->integer('reserved')->default(0);
                $table->integer('available')->default(14);
                $table->timestamps();

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
        Schema::dropIfExists('seats');
    }
};
