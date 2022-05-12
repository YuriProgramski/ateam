<?php

namespace App\Http\Controllers;

use App\Models\Pin;
// use App\Mail\ConfirmEdit;
// use App\Mail\ConfirmPass;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ConfirmEditPass;
use App\Mail\ConfirmEditEmail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function index() {
        $pins = Pin::get();
        $pendingpins = Pin::where('confirmed', 0)->get();
        $pendingpins = Pin::where('confirmed', 0)->get();
        $confirmedpins = Pin::where('confirmed', 1)->get();
        $user = Auth::user();
        $pendingreservations = Reservation::where('completed', 0)->get();
        $processedreservations = Reservation::where('completed', 1)->get();
        $myreservations = Reservation::where('name', $user->name)->get();
        $mypins = Pin::where('name', $user->name)->get();
        
        //$pins = Pin::where('id', $user->id)->get();
        return view('profile.profile', [
            'user' => $user,
            'pendingreservations' => $pendingreservations,
            'processedreservations' => $processedreservations,
            'myreservations' => $myreservations,
            'mypins' => $mypins,
            'pins' => $pins,
            'pendingpins' => $pendingpins,
            'confirmedpins' => $confirmedpins
            //'pins' => $pins
        ]);
    }

    public function edit() {
        $user = Auth::user();
        return view('profile.profileedit', [
            'user' => $user,
        ]);
    }

    public function updateEmail(Request $request) {
        $user = Auth::user();
        $request->validate([
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        // Update de gegevens van de ingelogde gebruiker
        $user->email = $request->email;
        $user->save();

       Mail::to($request->input('email'))
        ->send(New ConfirmEditEmail($request->only(['email'])));

        return redirect()->route('profile')->with('confirm', 'emailadres updated');
    }

    public function updatePassword(Request $request) {
        $user = Auth::user();
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        Mail::to($user->email)
        ->send(New ConfirmEditPass());

        return redirect()->route('profile')->with('pass', 'password updated');
    }
/*
    public function storeImage(Request $request){
        $user = User::where('id', Auth::id())->first();


        if($request->file('image')){
            $file= $request->file('image');
            $file-> move(public_path('public/assets/img'), $filename);
            $data['image']= $filename;
        }
        $user->image = $data;
        return redirect()->route('profile');
       
    }
    */
}
