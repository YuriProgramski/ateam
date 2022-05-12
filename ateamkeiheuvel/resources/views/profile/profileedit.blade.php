@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner loginwallp">
		@include('profile.profileedit.banner', [
            'user' => $user])
	</section>
@endsection
@section('firstsectcontent')
<h1 class="section-title" id="register">All systems go..</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

            
				
				<a href="{{ route('reservations.createasuser') }}" class="button">I wanna fly!</a>
                <a href="/#pinboard" class="button">Leave review Pin</a>
            </div>

            @endsection

            @section('main')
           
            @endsection