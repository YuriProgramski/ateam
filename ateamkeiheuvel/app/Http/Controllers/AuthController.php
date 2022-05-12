<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ConfirmRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
        }
    

    public function login() {
        return view('auth.login');

    }

    public function handleLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
            ]);

        // Schrijf de aanmeld logica om in te loggen.
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Als je ingelogd bent stuur je de bezoeker door naar de intented "profile" route (zie hieronder)
            return redirect()->route('profile');
        }

        // Als je gegevens fout zijn stuur je terug naar het formulier met
        // een melding voor het email veld dat de gegevens niet correct zijn.
        return back()->withErrors([
            'email' => "We couldn't login with these credentials..",
        ]);

    }

    public function register() {
        return view('auth.register');
    }

    public function handleRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
            ]);
    
            // Bewaar een nieuwe gebruiker in de databank met een beveiligd wachtwoord.
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
    
            // BONUS: Verstuur een email naar de gebruiker waarin staat dat er een nieuwe account geregistreerd is voor de gebruiker.
            Mail::to('info@khat.com')
            ->send(New ConfirmRegister($request->only(['name'])));
            Mail::to($request->input('email'))
            ->send(New ConfirmRegister($request->only(['name'])));
            //extraatje **
            return redirect()->route('login.get')->with('confirm', 'Registratie succesvol. Log in om een reservering te maken, een review toe te voegen of je profiel te bekijken..');
        }
    }
