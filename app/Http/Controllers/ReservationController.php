<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //insert page for the creation
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function getReservations(Request $request)
     {
         $reservations = Reservation::all();

         return view('commuter.book', ['reservations' => $reservations]);
     }
     
    // public function store(ReservationFormRequest $request)
    // {
    //     $request->validated();  //need formrequest

    //     Reservation::create([
    //         'user_id' => $request->user_id,
    //         'trip_id' => $request->trip_id,
    //         'tickets' => $request->tickets,
    //         'payment_id' => $request->payment_id,
    //         'present' => 0, 
    //         'seat' => $request->seat,
    //         'ref_num' => $request->ref_num,
    //         // 'image_path' => $this->storeImage($request)//image lang pangalan ani sa frontend kay mao nakabutang sa formrequest
    //     ]);

    //     //PAADD ASA MAGREDIRECT
    //     return redirect('/book');
    // }
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

    private function storeImage($request){
        $newImageName = uniqid() . '-' . $request->user_id . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
