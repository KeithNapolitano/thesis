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
        if(!Schema::hasTable('vans')){
            Schema::create('vans', function (Blueprint $table) {
                $table->id();
                $table->string('plate_num');
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('route_id');
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('route_id')->references('id')->on('routes');
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
        Schema::dropIfExists('vans');
    }
};
