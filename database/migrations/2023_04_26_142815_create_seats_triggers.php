<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSeatsTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER reservation_Insert BEFORE INSERT ON seats
            FOR EACH ROW BEGIN
            SET NEW.reserved = NEW.seat1 + NEW.seat2 + NEW.seat3 + NEW.seat4 + NEW.seat5 + NEW.seat6 + NEW.seat7 + NEW.seat8 + NEW.seat9 + NEW.seat10 + NEW.seat11 + NEW.seat12 + NEW.seat13 + NEW.seat14;
            SET NEW.available = 14 - (NEW.seat1 + NEW.seat2 + NEW.seat3 + NEW.seat4 + NEW.seat5 + NEW.seat6 + NEW.seat7 + NEW.seat8 + NEW.seat9 + NEW.seat10 + NEW.seat11 + NEW.seat12 + NEW.seat13 + NEW.seat14);
        END');

        DB::unprepared('CREATE TRIGGER reservation_Update2 BEFORE UPDATE ON seats
            FOR EACH ROW BEGIN
            SET NEW.reserved = NEW.seat1 + NEW.seat2 + NEW.seat3 + NEW.seat4 + NEW.seat5 + NEW.seat6 + NEW.seat7 + NEW.seat8 + NEW.seat9 + NEW.seat10 + NEW.seat11 + NEW.seat12 + NEW.seat13 + NEW.seat14;
            SET NEW.available = 14 - (NEW.seat1 + NEW.seat2 + NEW.seat3 + NEW.seat4 + NEW.seat5 + NEW.seat6 + NEW.seat7 + NEW.seat8 + NEW.seat9 + NEW.seat10 + NEW.seat11 + NEW.seat12 + NEW.seat13 + NEW.seat14);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS reservation_Insert;');
        DB::unprepared('DROP TRIGGER IF EXISTS reservation_Update2;');
    }
}
