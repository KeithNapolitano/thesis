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
                $table->integer('seat1')->nullable();
                $table->integer('seat2')->nullable();
                $table->integer('seat3')->nullable();
                $table->integer('seat4')->nullable();
                $table->integer('seat5')->nullable();
                $table->integer('seat6')->nullable();
                $table->integer('seat7')->nullable();
                $table->integer('seat8')->nullable();
                $table->integer('seat9')->nullable();
                $table->integer('seat10')->nullable();
                $table->integer('seat11')->nullable();
                $table->integer('seat12')->nullable();
                $table->integer('seat13')->nullable();
                $table->integer('seat14')->nullable();
                $table->timestamps();
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
