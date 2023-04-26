<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripFormRequest;
use App\Http\Requests\OPTripFormUpdateRequest;
use App\Models\Route;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //SHOW EVERY TRIP
    public function index()
    {
        return view('admin.index', [
            'trips' => Trip::orderBy('id', 'desc')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trips');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripFormRequest $request)
    {
        $request->validated();

        Trip::create([
            'route_id' => $request->route_id,
            // 'seat_id' => $request->seat_id,
            'dates' => $request->date,
            'van_plate' => $request->van_plate,
            'user_id' => $request->user_id,
            'driver_name' => $request->driver_name,
            // 'trip_status' => $request->trip_status,
            // 'orig_fare' => $request->orig_fare,
            // 'extra_fare' => $request->extra_fare
            // 'driver_status' => $request->driver_status,
            // 'passenger_status' => $request->passenger_status,
            // 'payment_status' => $request->payment_status,
            // 'supervisor_status' => $request->supervisor_status
        ]);

        Seat::create([
            'seat1' => 0,
            'seat2' => 0,
            'seat3' => 0,
            'seat4' => 0,
            'seat5' => 0,
            'seat6' => 0,
            'seat7' => 0,
            'seat8' => 0,
            'seat9' => 0,
            'seat10' => 0,
            'seat11' => 0,
            'seat12' => 0,
            'seat13' => 0,
            'seat14' => 0,
        ]);

        return redirect('/trip/create'); // pass the $routes variable to the view
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //SHOW INDIVIDUAL TRIP
    public function show()
    {
        return view('admin.account');
    }


    public function account()
    {
        return view('admin.account');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit', [
            'trip' => Trip::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TripFormRequest $request, $id)
    {
        $request->validated();

        $trip = Trip::findOrFail($id);
        $trip->update($request->except('_token', '_method') + ['dates' => $request->date]);

        return redirect('/trip/create')->with('message', 'Trip has been updated.');
    }

    public function OPupdate(OPTripFormUpdateRequest $request, $id)
    {
        $validated = $request->validated();
        $trip = Trip::findOrFail($id);

        // Update trip status
        $trip->driver_status = $request->has('driver_status') ? 1 : 0;
        $trip->passenger_status = $request->has('passenger_status') ? 1 : 0;
        $trip->payment_status = $request->has('payment_status') ? 1 : 0;
        $trip->supervisor_status = $request->has('supervisor_status') ? 1 : 0;

        // Calculate orig_fare if trip status is 1
        if (
            $trip->driver_status == 1 &&
            $trip->passenger_status == 1 &&
            $trip->payment_status == 1 &&
            $trip->supervisor_status == 1
        ) {
            $seats = Seat::where('id', $id)->firstOrFail();
            $filledSeatsCount = 0;
            for ($i = 1; $i <= 14; $i++) {
                if ($seats->{'seat'.$i} == 1) {
                    $filledSeatsCount++;
                }
            }
            $route = Route::findOrFail($trip->route_id);
            $fare = $route->fare;
            $origFare = $filledSeatsCount * $fare;
            $trip->orig_fare = $origFare;
            $trip->trip_status = 1;
            $trip->save();
        } else {
            $trip->orig_fare = null;
            $trip->trip_status = 0;
            $trip->save();
        }


        return redirect()->route('operator.opview', [
            'van_plate' => $request->input('van_plate')
        ])->with('message', 'Trip has been updated.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();

        return redirect('/trip/create');
    }

    public function tripticket(Request $request, $id)
    {
        $request->validate([
            'driver_status' => 'required' . $id,
            'passenger_status' => 'required',
            'payment_status' => 'required',
            'supervisor_status' => 'required',
        ]);

        Trip::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));

        return redirect(route('admin.superadmin'));
    }
}
