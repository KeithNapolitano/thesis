<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Route;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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
            $trips = Trip::all();
            $routes = Route::all();

            $weeklyTrips = $trips->groupBy(function ($trip) {
                return Carbon::parse($trip->dates)->weekOfYear;
            });
        
            $weeklyIncomes = $weeklyTrips->map(function ($trips) {
                return $trips->sum('orig_fare') + $trips->sum('extra_fare');
            });

            $monthlyTrips = $trips->groupBy(function ($trip) {
                return Carbon::parse($trip->dates)->format('F Y');
            });

            $monthlyIncomes = $monthlyTrips->map(function ($trips) {
                return $trips->sum('orig_fare') + $trips->sum('extra_fare');
            });

            $yearlyTrips = $trips->groupBy(function ($trip) {
                return Carbon::parse($trip->dates)->year;
            });

            $yearlyIncomes = $yearlyTrips->map(function ($trips) {
                return $trips->sum('orig_fare') + $trips->sum('extra_fare');
            });

            return view('admin.account', [
                // 'fare'=> Trip::select('orig_fare')->get,
                // 'daily' => Trip::where('dates', $now)->sum(Trip::raw("orig_fare + extra_fare"))
                // ->get(),
                'trips' => $trips,
                'routes' => $routes,
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
                'weeklyIncomes' => $weeklyIncomes,
                'monthlyIncomes' => $monthlyIncomes,
                'yearlyIncomes' => $yearlyIncomes,
                'weekstart' => $weekstart,
                'weekend' => $weekend,
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