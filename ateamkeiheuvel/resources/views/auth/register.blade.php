@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner loginwallp">
		@include('auth.register.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="register">Enlist</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p>After enlisting, on top of a <span class="highlight">monthly newsletter</span>, crew receive a <span class="highlight">high definition</span> metallic framed <span class="highlight">poster</span>, on
                    subscription or renewal, of each plane.</p>
					
					<p class="confirmer"><b>You can also use the pinboard, manage your reservations and share your experiences at
                    KHAT!</b>
                </p>
			

            </div>

            @endsection

            @section('main')
           
            @endsection