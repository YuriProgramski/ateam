@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('fleet.fleet.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="fleet">Fleet</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <p>The KHAT fleet showcases beautifully restored oldtimer airplanes, in their original livery and fully
                    airworthy:
                </p>
            </div>

            @endsection

            @section('main')
            
            <section class="mainsection" id="fleetboard">
			<div class="row">
							<div class="col-6 col-sm-4 col-lg-2 card">
								<div class="cardimage">
                                <img src={{ URL::asset('assets/img/fleet/redbaron.jpg') }} />
                                </div>
                                <p>Beechcraft BE17 Staggerwing</p>
                                <p> the Cadillac of the skies</p>
                                <p>Specifications
 
 Cruise Speed: 140 M/h
 Range: 700 km
 Total built: 785
 Still operational: 50
 Seats: 3 pax + pilot</p>
							
							</div>
							<div class="col-6 col-sm-4 col-lg-2 card">
								<div class="cardimage">
                                <img src={{ URL::asset('assets/img/fleet/pilatusp2.jpg') }} />
                                </div>
                                <p>Pilatus P2</p>
                                <p> first Swiss military trainer</p>
                                <p>Specifications
 
 Engine: Argus A410-A2
 Cruise Speed: 330 kph
 Endurance: 1.5 hrs
 Range: 560 km
 Total built: 54
 Still operational: 7
 Seats: 1 pax + pilot</p>
							
							</div>
                            <div class="col-6 col-sm-4 col-lg-2 card">
								<div class="cardimage">
                                <img src={{ URL::asset('assets/img/fleet/piper.jpg') }} />
                                </div>
                                <p>Piper PA-18 Super Cub</p>
                                <p> Aussie bush flier</p>
                                Specifications
                                <p>Cruise Speed: 90 M/h
Endurance: 3.5 hrs
Range: 500 km
Total built: 9000
Still operational: unknown
Seats: 1 pax + pilot</p>
							
							</div>
				</div>
<!-- </div> -->

            </section>
            <div class="w3-content" style="max-width:1200px">
  <img class="mySlides3" title="Piper" src="{{ URL::asset('assets/img/fleet/piper.jpg') }}" style="width:100%;display:none">
  <img class="mySlides3" title="Pilatus" src="{{ URL::asset('assets/img/fleet/pilatusp2.jpg') }}" style="width:100%">
  <img class="mySlides3" title="Beechcraft" src="{{ URL::asset('assets/img/fleet/redbaron.jpg') }}" style="width:100%;display:none">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="{{ URL::asset('assets/img/fleet/piper.jpg') }}" style="width:100%;cursor:pointer" onclick="currentDiv3(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="{{ URL::asset('assets/img/fleet/pilatusp2.jpg') }}" style="width:100%;cursor:pointer" onclick="currentDiv3(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="{{ URL::asset('assets/img/fleet/redbaron.jpg') }}" style="width:100%;cursor:pointer" onclick="currentDiv3(3)">
    </div>
  </div>
</div>


<section class="mainsection">
<h1 class="section-title">Videos</h1>
        <div class="containergridfleet">
            <iframe width="420" height="315" src="https://www.youtube.com/embed/IqGi1jYQgFw">
            </iframe>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/VWimm00hWbk">
            </iframe>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/L9aswVnenT8">
            </iframe>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/I7mYjyFuZy8">
            </iframe>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/gfLv4fVcEkI">
            </iframe>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/HjH01EWXy0k">
            </iframe>
        </div>
            </section>
            @endsection

           