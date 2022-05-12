<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationConfirm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PinsController extends Controller
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
     $user = Auth::user(); 
        return view('addpin', [
            'user' => $user
        ]);
    
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'buzzword' => 'required',
            'content' => 'required',
            'user_id' => 'required',
        ]);
        //---------------------------------
        $pin = new Pin();
        $pin->name = $request->name;
        $pin->buzzword = $request->buzzword;
        $pin->user_id = $request->user_id;
        $pin->content = $request->content;
        $pin->save();
        //-----------------
        /*
        Mail::to('info@khat.com')
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        Mail::to($request->input('email'))
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        */
        return redirect()->route('profile')->with('confirm', 'Pin succesfully sent! This will be added after approval..');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Show the form for deleting
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pin $pin)
    {
      //$reservation = Reservation::find($id);
      $pin->delete();
      return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy(Reservation $reservation)
    {
        //$reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/profile#reservations');
      
    }
    */
/*
    public function complete(Reservation $reservation) {
        if ($reservation->completed == 1){
            $reservation->completed = 0;
        }
        else {
            $reservation->completed = 1;
        }
        //
        $reservation->save();
        //
     
            return redirect()->back();
        

            }*/
            public function confirm(Pin $pin) {
                if ($pin->confirmed == 1){
                    $pin->confirmed = 0;
                }
                else {
                    $pin->confirmed = 1;
                }
                //
                $pin->save();
                //
             
                    return redirect()->back();
                
            }
}
