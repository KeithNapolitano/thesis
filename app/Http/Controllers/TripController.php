<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripFormRequest;
use App\Models\Route;
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
            // 'route_id' => $request->route_id,
            // 'seat_id' => $request->seat_id,
            'dates' => $request->dates,
            'van_plate' => $request->van_plate,
            'driver_name' => $request->driver_name,
            // 'trip_status' => $request->trip_status,
            // 'orig_fare' => $request->orig_fare,
            // 'extra_fare' => $request->extra_fare
            // 'driver_status' => $request->driver_status,
            // 'passenger_status' => $request->passenger_status,
            // 'payment_status' => $request->payment_status,
            // 'supervisor_status' => $request->supervisor_status
        ]);

        return redirect('/trip/create');
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
        // return view('admin.show', [
        //     'trips' => Trip::findOrFail($id)
        // ]);
        return view('admin.account');
    }

    public function account(){
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

        Trip::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));

        return redirect(route('admin.trips'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trip::destroy($id);

        return redirect(route('admin.trips'))->with('message', 'Trip has been deleted.');
    }

    public function tripticket(Request $request, $id){
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
