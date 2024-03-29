<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sched.test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commuter.test1');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validated();

        Seat::create([
            'trip_id' => $request->trip_id,
            'seat1' => $request->seat1,
            'seat2' => $request->seat2,
            'seat3' => $request->seat3,
            'seat4' => $request->seat4,
            'seat5' => $request->seat5,
            'seat6' => $request->seat6,
            'seat7' => $request->seat7,
            'seat8' => $request->seat8,
            'seat9' => $request->seat9,
            'seat10' => $request->seat10,
            'seat11' => $request->seat11,
            'seat12' => $request->seat12,
            'seat13' => $request->seat13,
            'seat14' => $request->seat14,
            'seat15' => $request->seat15,
        ]);

        return redirect('/commuter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
