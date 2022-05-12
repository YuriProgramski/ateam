<h2>Pending reservations
            @if($pendingreservations->count() > 0)
                    ({{$pendingreservations->count()}})
                    @endif
            </h2>
            <div class="row">
                @forelse($pendingreservations as $reservation)
							<div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$reservation->name}}</b>
								<p>{{$reservation->email}}</p>
								<p>{{$reservation->tel}}</p>
                                <p>{{$reservation->planechoice}}</p>
                                <p>{{$reservation->date}}</p>
                                <form
                                onsubmit="return confirm('Do you really want to toggle the reservation status?');"
                                action="/reservations/{{ $reservation->id }}" method="post">
                                @method('put')
                                @csrf
                                <input type="submit" value="&#10004"/>
                                <!-- <p>&#10004</p> -->
</form>
                                <form
                                onsubmit="return confirm('Do you really want to delete the reservation?');"
                                action="/reservations/{{ $reservation->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input onClick="catch()" type="submit" value="x"/>
                                <!-- <p>&#10004</p> -->
</form>

                            </div>
                                @empty
                                <p>No pending reservations..</p>
                              
							
                            @endforelse
							
						</div>
