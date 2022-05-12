@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner">
		@include('crew.crew.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title" id="crew">Crew</h1>
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
								<div class="cardimage crewimage">
                                <img src={{ URL::asset('assets/img/crew/1.jpg') }} />
                                </div>
                               
								<span>chairman</span>
                               <p>Rob Schreurs</p>
							
							</div>
							
                            <div class="col-6 col-sm-4 col-lg-2 card">
								<div class="cardimage crewimage">
                                <img src={{ URL::asset('assets/img/crew/2.jpg') }} />
                                </div>
                               
								<span>secretary</span>
                               <p>Marc Saey</p>
							
							</div>

                            <div class="col-6 col-sm-4 col-lg-2 card">
								<div class="cardimage crewimage">
                                <img src={{ URL::asset('assets/img/crew/3.jpg') }} />
                                </div>
                               
								<span>treasurer</span>
                               <p>Filippe Rochette</p>
							
							</div>

				</div>
<!-- </div> -->

            </section>
            @endsection