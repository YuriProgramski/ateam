@extends('layouts.default')
@section('title')<title>About</title>@endsection
@section('banner')
<section class="banner">
		@include('pages.about.banner')
	</section>
@endsection
@section('firstsectcontent')

<h1 class="section-title">About us</h1>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                <p> KHAT was founded in 2017 by three oldtimer enthusiasts, on the belief that flying oldtimers should
                    be
                    special, and in reach of the
                    general public.
                    Therefore, our main goal is to make people's dreams of flying come through, and preserving the
                    historical aircraft ourselves through passion and maintenance.
                </p>
                <a href="/contact" class="button">Connect</a>
            </div>

            @endsection

            @section('main')
            <section class="mainsection">
            <h1 class="section-title" id="strip">
                 About the air strip</h1>
                 <h3 class="blink"><a target="_blank" href="https://www.motorvliegen.be/aerodrome">(!) Pilot info </a></h3>        
           
                 <img data-aos="zoom-out" data-aos-duration="6000" class="airstripimg" src={{ URL::asset('assets/img/strip.jpg') }}/>
					
            <div class="row">
				<div class="col-12 col-md-8">
                <div data-aos="fade-left" data-aos-duration="3000">
                        <p>
                        Born a brainchild to Piet Van Buggenhout, The Royal AeroClub Keiheuvel had been founded in
                            1956.
                            Coming
                            back from war, the bold innovator
                            couldn't resist the insatiable urge to make the noble art of flying his own. Despite the
                            fact
                            Piet had
                            the means and skills to
                            operate and maintain motorised craft due to having his own car dealership, he could not
                            engage
                            in his
                            passion without
                            traversing to Deurne and back. Since, back in the fifties, this was the only airstrip
                            readily
                            available
                            for civilians, Piet took the initiative to
                            install a local landing strip. Conveniently, the then mayor belonged to Piet's inner circle
                            and
                            from
                            then on, the project was set in motion.
                        </p>
                    </div>
                </div>
				<div class="col-12 col-md-4">
                <div data-aos="fade-left" data-aos-duration="3000">
                        <p> <img style="max-width: 444px;" src={{ URL::asset('assets/img/strip4.jpg') }} /></p>
                    </div>	
                </div>
			</div>

            <div class="row">
            <div class="col-12 col-md-4">
            <div data-aos="fade-left" data-aos-duration="3000">
                        <p> <img style="max-width: 444px;" src={{ URL::asset('assets/img/strip4.jpg') }} /></p>
                    </div>			
        </div>
				<div class="col-12 col-md-8">
                <div data-aos="fade-right" data-aos-duration="3000">
                        <p> After a subsequent board
                meeting, it had been decided that the 'barren dunes' in the middle of a remote
                forest at the border with Limburg
                would be the perfect location as the townships themselves did not have the infrastructurial means to
                facilitate an airstrip.
                This long, narrow piece of barren land, sticking out as a bald spot on a furry mammal, had been formerly
                used by the Germans to send out Stukas.
                All said and done, and Piet now had an airstrip but no planes or pilots as of yet. Therefore, Piet
                released an advertisement in the Belgian Official Journal of 1956
                inquiring about potential local providers and instructors.</p>
                    </div>		
            </div>
				
			</div>

            <div class="row">
				<div class="col-12 col-md-8">
                <p data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                Within that search period, faith would have it that members of AeroClub Viersen, Germany, had
                            some
                            trouble
                            making a stop at Neerpelt Airstrip, experiencing a close call.
                            Since one had a newly renovated airstrip but no planes, and the other had planes but no
                            decent
                            sisterclub of which they could use the strip, both
                            clubs joined hands together, founding a cooperation still existing today. In 1958, they made
                            their first
                            purchase being
                            the Rhonlerche OO-KEI, which is still operational as of today.<br>
                
            </p>		
            </div>
				<div class="col-12 col-md-4">
                <div data-aos="fade-right" data-aos-duration="3000">
                        <p> <img src={{ URL::asset('assets/img/rhon.jpg') }} /></p>
                    </div>	
            </div>
			</div>

			
            </section>
            <section class="firstsect">
		<div class="container">
        <!-- src="{{ URL::asset('assets/img/crew.png') }}" -->
		<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/1.png') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/2.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/3.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/4.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/5.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/6.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/7.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/8.jpg') }}" style="width:100%">
  <img class="mySlides2" src="{{ URL::asset('assets/img/home/10.jpg') }}" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
</div>
	</section>
  

</section>
            @endsection
      
         

           
                        