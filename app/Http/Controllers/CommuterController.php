<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripFormRequest;
use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class CommuterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getRoutes()
     {
         $routes = Route::all(); // Assuming you have a Route model and a "routes" table in your database
         $trips = Trip::all(); // Retrieve the trips
         return view('commuter.commuter', compact('routes', 'trips',));
     }      
}
