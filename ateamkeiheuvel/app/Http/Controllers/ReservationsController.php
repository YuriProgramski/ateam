<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationConfirm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationsController extends Controller
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
      
        return view('reservations.create');
    
    }
    public function createasuser()
    {
      $user = Auth::user();
        return view('reservations.createasuser', [
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
            'name' => 'required|unique:reservations',
            'email' => 'required|email|unique:reservations',
            'planechoice' => 'required',
            'date' => 'required',
            'tel' => 'required'
        ]);
        //---------------------------------
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->planechoice = $request->planechoice;
        $reservation->date = $request->date;
        $reservation->tel = $request->tel;
        //$reservation->user_id = $request->user_id;
        $reservation->save();
        //-----------------
        Mail::to('info@khat.com')
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        Mail::to($request->input('email'))
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        return back()->with('confirmres', 'Reservation succesfully sent!');
    }


    public function storeasuser(Request $request)
    {
        $request->validate([
            'name' => 'required|',
            'email' => 'required|email|',
            'planechoice' => 'required',
            'date' => 'required',
            'tel' => 'required',
            //'user_id' => 'required'
        ]);
        //---------------------------------
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->planechoice = $request->planechoice;
        $reservation->date = $request->date;
        $reservation->tel = $request->tel;
        $reservation->user_id = $request->user_id;
        $reservation->save();
        //-----------------
        Mail::to('info@khat.com')
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        Mail::to($request->input('email'))
        ->send(new ReservationConfirm($request->only(['name', 'email', 'planechoice' , 'date'])));
        //-----------------
        return redirect()->route('profile')->with('confirm', 'Reservation succesfully sent');
        
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
    public function delete()
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //$reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/profile#reservations');
      
    }

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
        
    }
}
