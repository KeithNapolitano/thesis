<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripFormRequest;
use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
        $routes = Route::all();
        $trips = Trip::all();
        $seats = Seat::all();
        // Get the selected trip ID from the request
        $trip_id = $request->input('trip_id');
        
        return view('commuter.commuter', compact('routes', 'trips', 'seats', 'trip_id'));
    }
    
         
public function processRoutes(Request $request)
{
    $trip_id = $request->input('trip_id');
    $selected_seats = $request->input('seats');

    if (empty($selected_seats)) {
        // handle error: no seat selected
        return;
    }

    // convert the selected seats array to comma-separated string
    $seats = implode(',', $selected_seats);

    $ref_num = Str::random(8);

    // create a new reservation record in the 'reservations' table
    Reservation::create([
        'trip_id' => $trip_id,
        'seat' => $seats,
        'user_id' => Auth::id(), // populate user_id with the ID of the logged-in user
        'ref_num' => $ref_num,
    ]);

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
