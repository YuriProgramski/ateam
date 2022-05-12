<h2>Processed reservations
                        @if($processedreservations->count() > 0)
                    ({{$processedreservations->count()}})
                    @endif
                        </h2>
						<div class="row">
                @forelse($processedreservations as $reservation)
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
                                <input type="submit" value="x"/>
                                <!-- <p>&#10004</p> -->
</form>

                            </div>
                                @empty
                                <p>No processed reservations..</p>
                              
							
                            @endforelse
							