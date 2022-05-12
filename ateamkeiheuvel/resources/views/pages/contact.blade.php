@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('pages.contact.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="register">Join the crew</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p>On top of a <span class="highlight">monthly newsletter</span>, crew receive a <span class="highlight">high definition</span> metallic framed <span class="highlight">poster</span>, on
                    subscription or renewal, of each plane.</p>
					
					<p class="confirmer"><b>You can also use the pinboard, manage your reservations and share your experiences at
                    KHAT!</b>
                </p>
				<a href="/#pinboard" class="button">Pinboard</a>
                <a href="/register" class="button">Join Crew</a>
				<a href="{{ route('reservations.create') }}" class="button">I wanna fly!</a>

            </div>

            @endsection

            @section('main')
            <section class="mainsection">
		<div class="container">
        <h1 class="section-title" id="adres">Contact us</h1>
        <h2>Airstrip</h2>
			<div class="row">
				<div class="col-12 col-md-4">
				17e Esc. Licht Vliegwezenlaan 8
BE-2490 BALEN
BELGIUM</div>

				<div class="col-12 col-md-4">
					
				<img src={{ URL::asset('assets/img/map.png') }}></div>

				<div class="col-12 col-md-4">
					
				Email: info@ebkh.be
Tel: +32 (0) 14 72 85 97</div>
			</div>

            <h2>Office</h2>
			<div class="row">
				<div class="col-12 col-md-4">
					
				Koning Boudewijnstraat 22

Hechtel

B3940

Belgium</div>

				<div class="col-12 col-md-4">
					
				<img src={{ URL::asset('assets/img/map.png') }}></div>

				<div class="col-12 col-md-4">
					
				+32 496 384 384
			info</div>
			</div>
		</div>
	</section>
            @endsection