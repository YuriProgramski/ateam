@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('reservations.includes.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="register">Make a reservation</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p>Since the formalities and procedures regarding flying with customers are relatively extensive due to safety protocols and insurance policies,
                    we have a <span class="highlight">reservation process</span>, where we contact you for further notice after you have made the right specifications in following reservation:</p>
            
  
                </div>
       
            @endsection

            @section('main')
            <section class="mainsection">
		<div class="container">
       
        <form method="post" action="/reservations">@csrf
        <p> <input type="email" name="email"
            value="{{ $user->email }}"/>
            @error('email')<p class="error blink">{{ $message }} </p>@enderror
         
            <p>  <input type="text" name="name" placeholder="Ben Dover"
            value="{{ $user->name }}"/>
            @error('name')<p class="error blink">{{ $message }} </p>@enderror

            <p>  <input type="text" name="tel" placeholder="0xxx xx xx xx"
            value="{{ $user->tel }}"/>
            @error('tel')<p class="error blink">{{ $message }} </p>@enderror

            <p>  <input type="hidden" name="user_id" 
            value="{{ $user->id }}"/>
          
            <p>  <input type="radio" name="planechoice" value="Pilatus P2">Pilatus P2</input>
            <input type="radio" name="planechoice" value="Beachcraft Staggerwing">Beachcraft Staggerwing</input>
            <input type="radio" name="planechoice" value="Red Baron">Red Baron</input>
            @error('planechoice')<p class="error blink">{{ $message }} </p>@enderror

            <p><input type="date" id="date" name="date"
       min="2022-06-02"></p>
       @error('date')<p class="error blink">{{ $message }} </p>@enderror
        <p> <button class="button" type="submit">Send</button></p>
        @if(session('confirmres'))
            <p class="confirm confirmer">{{ session('confirmres') }}</p>
            @endif
		</div>
	</section>
            @endsection
