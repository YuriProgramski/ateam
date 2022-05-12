@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner loginwallp">
		@include('profile.profile.banner')
	</section>
@endsection
@section('firstsectcontent')
<h1 class="section-title" id="register">All systems go..</h1>
@if($user->id == 1)
            <a href="/underconstruction" class="button profilemenu">add plane</a>
                    <hr style="width:88px;">  
                    <a href="/underconstruction" class="button profilemenu">add crew</a>
            @endif
@if($user->id !== 1)
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

            
				
				<a href="{{ route('reservations.createasuser') }}" class="button">I wanna fly!</a>
                <a href="{{ route('pins.create') }}" class="button">Leave review Pin</a>
            </div>
@endif
            @endsection

            @section('main')
            <section class="mainsection" id="reservations" style="display:none;">
			<h1 class="section-title">Reservations</h1>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->

			@include('profile.profile.pendingreservations', ['pendingreservations' => $pendingreservations])
						<!-- ----------------- -->
			@include('profile.profile.processedreservations', ['processedreservations' => $processedreservations])
						
<!-- </div> -->

</div>  <a onclick="closereservations()" href="#" class="button ">close</a>  </section>

            <!-- ---------------------------------------- -->

            <section class="mainsection" id="myreservations" style="display:none;">
		@include('profile.profile.myreservations', ['myreservations' => $myreservations])
					<!-- </div> -->
	
</div>
<a href="{{ route('reservations.createasuser') }}" class="button">I wanna fly!</a>
<a onclick="closemyreservations()" href="#" class="button ">close</a>   </section>


 <!-- ---------------------------------------- -->

 <section class="mainsection" id="mypins" style="display:none;">
			@include('profile.profile.mypins', ['mypins' => $mypins])
					<!-- </div> -->
	
</div>
<p>These will be added to the pinboard after approval..</p>
<a href="{{ route('pins.create') }}" class="button">Leave review Pin</a>
<a onclick="closemypins()" href="#" class="button ">close</a>   </section>

<!-- ---------------------------------------- -->

<section class="mainsection" id="pins" style="display:none;">
			@include('profile.profile.pins', ['confirmedpins' => $confirmedpins, 'pendingpins' => $pendingpins])
					<!-- </div> -->
                    

	
</div>
<p>Hi admin! Please choose which pins you'd like to view on the home pinboard..</p>

<a onclick="closepins()" href="#" class="button ">close</a>   </section>
            @endsection
            <script>
function showreservations() {
document.getElementById("reservations").style.display = "block";

}
function showmyreservations() {
document.getElementById("myreservations").style.display = "block";

}
function showmypins() {
document.getElementById("mypins").style.display = "block";

}
function showpins() {
document.getElementById("pins").style.display = "block";

}
function closereservations() {
document.getElementById("reservations").style.display = "none";

}
function closemyreservations() {
document.getElementById("myreservations").style.display = "none";

}  
function closemypins() {
document.getElementById("mypins").style.display = "none";

}   
function closepins() {
document.getElementById("pins").style.display = "none";

}              </script>