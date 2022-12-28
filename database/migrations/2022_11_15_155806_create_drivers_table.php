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
        if(!Schema::hasTable('drivers')){
            Schema::create('drivers', function (Blueprint $table) {
                $table->id();
                $table->string('driver_name')->unique();
                $table->string('driver_contact')->unique();
                $table->string('driver_address');
                $table->unsignedBigInteger('route_id');
                $table->unsignedBigInteger('van_id');
                $table->timestamps();

                $table->foreign('route_id')->references('id')->on('routes');
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
        Schema::dropIfExists('drivers');
    }
};
