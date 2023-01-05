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
        if(!Schema::hasTable('scheds')){
            Schema::create('scheds', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('route_id');
                $table->date('sched_date');
                $table->boolean('flag');
                $table->timestamps();

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
        Schema::dropIfExists('scheds');
    }
};
