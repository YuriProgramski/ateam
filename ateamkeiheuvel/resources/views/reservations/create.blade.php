@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('reservations.includes.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="register">Make a reservation</h1>
@if(session('confirmres'))
            <p class="confirm confirmer">{{ session('confirmres') }}</p>
            @endif
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p>Since the formalities and procedures regarding flying with customers are relatively extensive due to safety protocols and insurance policies,
                    we have a <span class="highlight">reservation process</span>, where we contact you for further notice after you have made the right specifications in following reservation:</p>
            
                    <p class="confirmer"><b>If you create an account, you can also use the pinboard, manage your reservations and share your experiences at
                    KHAT!</b>
                   
                </p>
  
                </div>
                <a href="/register" class="button">Register</a>
                <p onclick="toggle()" class="button">reserve anyway</a>
            @endsection

            @section('main')
            <section class="mainsection" id="show" style="display:none;">
		<div class="container">
       
        <form method="post" action="/reservations">@csrf
        <p> <input type="email" name="email" placeholder="example@mail.com"
            value="{{ old('email') }}"/>
            @error('email')<p class="error blink">{{ $message }} </p>@enderror
         
            <p>  <input type="text" name="name" placeholder="Ben Dover"
            value="{{ old('name') }}"/>
            @error('name')<p class="error blink">{{ $message }} </p>@enderror
          
            <p>  <input type="text" name="tel" placeholder="0xxx xx xx xx"
            value="{{ old('tel') }}"/>
            @error('tel')<p class="error blink">{{ $message }} </p>@enderror

            <p>  <input type="radio" name="planechoice" value="Pilatus P2">Pilatus P2</input>
            <input type="radio" name="planechoice" value="Beachcraft Staggerwing">Beachcraft Staggerwing</input>
            <input type="radio" name="planechoice" value="Red Baron">Red Baron</input>
            @error('planechoice')<p class="error blink">{{ $message }} </p>@enderror

            <p><input type="date" id="date" name="date"
       min="2022-06-02"></p>
       @error('date')<p class="error blink">{{ $message }} </p>@enderror
        <p> <button onclick="hidecreate()" class="button" type="submit">Send</button></p>
        
		</div>
	</section>
            @endsection

            <script>
function toggle() {
document.getElementById("show").style.display = "block";

}

                </script>