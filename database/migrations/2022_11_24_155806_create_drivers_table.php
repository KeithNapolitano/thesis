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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('driver_contact')->unique();
            $table->string('driver_address')->unique();
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('van_id');
            $table->timestamps();

            $table->foreign('route_id')->references('id')->on('routes')->cascadeOnUpdate();
            $table->foreign('van_id')->references('id')->on('vans')->cascadeOnUpdate();
        });
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
