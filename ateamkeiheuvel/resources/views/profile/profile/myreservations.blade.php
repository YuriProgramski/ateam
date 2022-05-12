<h1 class="section-title">My reservations</h1>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->
            <div class="row">
                @forelse($myreservations as $reservation)
							<div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$reservation->name}}</b>
								<p>{{$reservation->email}}</p>
								<p>{{$reservation->tel}}</p>
                                <p>{{$reservation->planechoice}}</p>
                                <p>{{$reservation->date}}</p>
                                <form
                                onsubmit="return confirm('Do you really want to delete the reservation?');"
                                action="/reservations/{{ $reservation->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="x"/>
                                <!-- <p>&#10004</p> -->
</form>
                            </div>
                                @empty
                                <p>No reservations..</p>
                              
							
                            @endforelse