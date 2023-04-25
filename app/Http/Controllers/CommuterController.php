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

    // Retrieve the trip_id from the request or your model
    //$trip_id = $request->input('trip_id', $trips->first()->id);

    return view('commuter.commuter', compact('routes', 'trips'));
    }

        
    public function processRoutes(Request $request)
{
    $trip_id = $request->input('trip_id');
    $selected_seat_id = $request->input('seat_id');

    if (!$request->has('seats')) {
        // handle error: no seat selected
        return;
    }
    
    // loop through each selected seat and update the database
    foreach ($request->input('seats') as $seat) {
        $seat_column = 'seat'.$seat;
        
        // check if the trip_id is equal to the selected seat_id
        if ($trip_id == $selected_seat_id) {
            // update the value of the selected seat to 1 in the database
            DB::table('seats')->update([$seat_column => 1]);
        }
    }
    
    return redirect('/commuter');
}

}
