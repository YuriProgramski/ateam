@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('pages.home.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title">Welcome</h1>
			<div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

<p>Are you a young gamer fond of the thrill of in-game flying? Or are you, like our planes, an oldtimer wanting to relive his youth?
	Doesn't matter! At KHAT we will give everyone the flying experience of their life!
</p>
				<p>Keiheuvel Historical Aircraft Team is a fellowship
					of classical aviation enthusiasts, who are passionate about making flying more accessible to the
					public.
				</p>

				<a href="/about#us" class="button">More info</a>

			</div>

            @endsection

            @section('main')
            <section class="mainsection" id="pinboard">
			<h1 class="section-title">Review Pinboard</h1>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->
			<div class="row">
				<!-- confirmedpins!!!! -->
			@forelse ($confirmedpins as $pin)
							<div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$pin->buzzword}}</b>
								<p>{{$pin->content}}</p>
								<i>- {{$pin->name}}</i>
							</div>
							@empty
							<p>No pins..</p>
							@endforelse
							
						</div>
<!-- </div> -->
<p>Register to leave a pin..</p>
<a href="/register" class="button">Register</a>
            </section>

		

<section class="firstsect" style="min-height: 555px;">
		<div class="container">
		<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/1.png') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/2.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/3.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/4.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/5.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/6.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/7.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/8.jpg') }}" style="width:100%">
  <img class="mySlides  w3-animate-fading" src="{{ URL::asset('assets/img/home/10.jpg') }}" style="width:100%">
</div>
</div>
	</section>
            @endsection


