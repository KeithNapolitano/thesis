<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RouteFormRequest;
//use Illuminate\Routing\Route;
use App\Models\Route;
use App\Models\Trip;
use App\Models\User;
use App\Models\Seat;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('route.index', [
            'routes' => Route::orderBy('id', 'desc')->paginate(5)
            //     // 'routes' => Route::orderBy('id', 'desc')->paginate(5)
            //     //'routes' => Route::where('fare', '>1000')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RouteFormRequest $request)
    {
        $request->validated();

        Route::create([
            'descr' => $request->descr,
            'fare' => $request->fare,
        ]);

        return redirect('/trip/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //q
    }
    public function showDestination()
    {
        $routes = Route::all();
        $trips = Trip::all();
        $users = User::all();
        return view('admin.trips')->with('routes', $routes)->with('trips', $trips)->with('users', $users);
    }
    public function OPshowDestination()
    {
        $routes = Route::all();
        $trips = Trip::all();

        return view('/operator/schedule')->with('routes', $routes)->with('trips', $trips);
    }


    public function OPSchedshowDestination()
{
    $routes = Route::all();
    $trips = Trip::all();
    $seats = Seat::all();

    return view('/operator/schedule', [
        'routes' => $routes,
        'trips' => $trips,
        'seats' => $seats
    ]);
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $route = Route::findOrFail($id);
        $route->descr = $request->input('descr');
        $route->fare = $request->input('fare');
        $route->save();

        return redirect('/trip/create')->with('success', 'Route details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Route::destroy($id);

        return redirect(route('admin.trips'))->with('message', 'Route has been deleted.');
    }
}
