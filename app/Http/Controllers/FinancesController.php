<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    public function finances(){
            $now = now()->format('Y-m-d');
            $weekstart = now()->startOfWeek(Carbon::SUNDAY)->format('Y-m-d');
            $weekend = now()->endOfWeek(Carbon::SATURDAY)->format('Y-m-d');
            $monthstart = now()->startOfMonth()->format('Y-m-d');
            $monthend = now()->endOfMonth()->format('Y-m-d');
            $yearstart = now()->startOfYear()->format('Y-m-d');
            $yearend = now()->endOfYear()->format('Y-m-d');

            
            return view('admin.account', [
                'daily' => Trip::select(Trip::raw("SUM(orig_fare + extra_fare) as daily"))
                    ->where('dates', $now)->get(),
                'dailytrips' => Trip::where('dates', $now)->count(),
                
                'weekly' => Trip::select(Trip::raw("SUM(orig_fare + extra_fare) as weekly"))
                    ->whereBetween('dates', [$weekstart, $weekend])->get(),
                'weeklytrips' => Trip::whereBetween('dates', [$weekstart, $weekend])->count(),

                'monthly' => Trip::select(Trip::raw("SUM(orig_fare + extra_fare) as monthly"))
                    ->whereBetween('dates', [$monthstart, $monthend])->get(),
                'monthlytrips' => Trip::whereBetween('dates', [$monthstart, $monthend])->count(),

                'yearly' => Trip::select(Trip::raw("SUM(orig_fare + extra_fare) as yearly"))
                    ->whereBetween('dates', [$yearstart, $yearend])->get(),
                'yearlytrips' => Trip::whereBetween('dates', [$yearstart, $yearend])->count(),
            ]);

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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