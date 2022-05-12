<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use App\Models\Plane;
use Illuminate\Http\Request;
use App\Mail\ContactBrochure;
use App\Mail\ReservationConfirm;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
  
        $confirmedpins = Pin::where('confirmed', 1)->get();
        return view('pages.home', [
          'confirmedpins' => $confirmedpins
        ]);
    }

    public function about() {
        return view('pages.about');
    }
    public function fleet() {
     return view('fleet.fleet');
    }
    public function crew() {
        return view('crew.crew');
    }
    public function underconstruction() {
        return view('pages.underconstruction');
    }


    // public function login() {
    //     return view('login');
    // }

    // public function register() {
    //     return view('register');
    // }

    public function contact() {
        return view('pages.contact');
    }
    public function verzenden(Request $request) {
       $request->validate([
           'email' => 'required|email',
           'name' => 'required'
       ]);

       Mail::to($request->input('email'))
       ->send(new ContactBrochure($request->only(['name', 'email'])));

       return back()->with('confirm', 'Brochure succesfully sent!');
    }
    
}
