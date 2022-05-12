@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('includes.addpin.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="register">Leave a review pin</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p>We at KHAT like to know how <span class="highlight">you</span> experienced your time with us! So we humbly oblige you to leave a pin and share the fun!:</p>
            
  
                </div>
       
            @endsection

            @section('main')
            <section class="mainsection">
		<div class="container">
       
        <form method="post" action="{{route('pins.store')}}">@csrf
        <p>Name:</p>
            <p>  <input type="text" name="name"
            value="{{ $user->name }}"/>
            @error('name')<p class="error blink">{{ $message }} </p>@enderror
            <p>Buzzword:</p>
            <p>  <input type="text" name="buzzword" placeholder="cool!"
            value="{{ old('buzzword') }}"/>
            @error('buzzword')<p class="error blink">{{ $message }} </p>@enderror
            <p>Review:</p>

            <p>  <input type="text" name="content" 
            value="{{ old('content') }}"/>
            @error('content')<p class="error blink">{{ $message }} </p>@enderror

            <p>  <input type="hidden" name="user_id" 
            value="{{ $user->id }}"/>
          
           

        <p> <button class="button" type="submit">Send</button></p>
        @if(session('confirmres'))
            <p class="confirm confirmer">{{ session('confirmres') }}</p>
            @endif
		</div>
	</section>
            @endsection
