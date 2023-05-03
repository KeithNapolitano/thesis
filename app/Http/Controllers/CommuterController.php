<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripFormRequest;
use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\Seat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class CommuterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function getRoutes(Request $request)
{
    $routes = Route::all(); // Assuming you have a Route model and a "routes" table in your database
    $trips = Trip::all(); // Retrieve the trips
    $seats = Seat::all();

    // Retrieve the selected trip_id from the request
    $trip_id = $request->input('trip_id');

    return view('commuter.commuter', compact('routes', 'trips', 'seats', 'trip_id'));
}


public function processRoutes(Request $request)
{
    //dd($request->all());
    $trip_id = $request->input('trip_id');
    $selected_seats = $request->input('seats');

    if (empty($selected_seats)) {
        // handle error: no seat selected
        return;
    }

    // loop through each selected seat and update the database
    foreach ($selected_seats as $seat) {
        $seat_column = 'seat'.$seat;

        // update the value of the selected seat to 1 in the database
        DB::table('seats')
            ->where('trip_id', $trip_id)
            ->update([$seat_column => 1]);
    }

    return redirect('/book');
}


}
