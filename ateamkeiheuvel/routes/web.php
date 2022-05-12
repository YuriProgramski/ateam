<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PinsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;

//all accessible for visitors
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about']);
Route::get('/fleet', [PagesController::class, 'fleet']);
Route::get('/crew', [PagesController::class, 'crew']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact', [PagesController::class, 'verzenden']);
Route::get('/underconstruction', [PagesController::class, 'underconstruction']);

Route::get('/reservations/create', [ReservationsController::class, 'create'])->name('reservations.create')->middleware('guest');
Route::get('/reservations/createasuser', [ReservationsController::class, 'createasuser'])->name('reservations.createasuser')->middleware('auth');;
Route::post('/reservations', [ReservationsController::class, 'store'])->middleware('guest');
Route::post('/reservations', [ReservationsController::class, 'storeasuser'])->middleware('auth');
Route::put('/reservations/{reservation}', [ReservationsController::class, 'complete'])->middleware('auth');
Route::delete('/reservations/{reservation}', [ReservationsController::class, 'destroy'])->middleware('auth');

Route::get('/pins/create', [PinsController::class, 'create'])->name('pins.create')->middleware('auth');
Route::post('/pins', [PinsController::class, 'store'])->name('pins.store')->middleware('auth');
Route::put('/pins/{pin}', [PinsController::class, 'confirm'])->middleware('auth');
Route::delete('/pins/{pin}', [PinsController::class, 'destroy'])->middleware('auth');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login.get')->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register.get')->middleware('guest');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register.post')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
//
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/edit/email', [ProfileController::class, 'updateEmail'])->name('profile.update-email')->middleware('auth');
Route::put('/profile/edit/password', [ProfileController::class, 'updatePassword'])->name('profile.update-password')->middleware('auth');
Route::post('/profile/storeIimage',[ProfileController::class,'storeImage'])->name('images.store');