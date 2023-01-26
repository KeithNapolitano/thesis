<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Driver;
use App\Models\Passenger;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Route;
use App\Models\Trip;
use App\Models\User;
use App\Models\Van;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Trip::factory(100)->create();
        User::factory(100)->create();
        Passenger::factory(100)->create();
        Van::factory(100)->create();
        Route::factory(100)->create();
        Driver::factory(100)->create();
        Trip::factory(100)->create();
        Payment::factory(100)->create();
        Reservation::factory(100)->create();
    }
}
