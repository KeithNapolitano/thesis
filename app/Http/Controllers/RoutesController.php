<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RouteFormRequest;
//use Illuminate\Routing\Route;
use App\Models\Route;

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
        $request->validate();

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
    public function update(RouteFormRequest $request, $id)
    {
        $request->validated();

        Route::where('id', $id)->update($request->except([
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
        Route::destroy($id);

        return redirect(route('admin.trips'))->with('message', 'Route has been deleted.');
    }
}
