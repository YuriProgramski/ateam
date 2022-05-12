<h1 class="section-title">Pins</h1>
            <h2>Pending pins</h2>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->
            <div class="row">
                @forelse ($pendingpins as $pin)
                <div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$pin->buzzword}}</b>
								<p>{{$pin->content}}</p>
								<i>- {{$pin->name}}</i>
							<!-- add knop to confirmed pins -->
                            <form
                                onsubmit="return confirm('Do you really want to confirm this pin?');"
                                action="/pins/{{ $pin->id }}" method="post">
                                @method('put')
                                @csrf
                                <input type="submit" value="&#10004"/>
                                <!-- <p>&#10004</p> -->
</form>
                                <form
                                onsubmit="return confirm('Do you really want to delete the pin?');"
                                action="/pins/{{ $pin->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="x"/>
                                <!-- <p>&#10004</p> -->
</form>
                            </div>
                                @empty
                                <p>No pending pins..</p>
                              
							
                            @endforelse
                            	
</div>
<h2>Confirmed pins</h2>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->
            <div class="row">
                @forelse ($confirmedpins as $pin)
                <div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$pin->buzzword}}</b>
								<p>{{$pin->content}}</p>
								<i>- {{$pin->name}}</i>
							<!-- add knop to confirmed pins -->
                            <form
                                onsubmit="return confirm('Do you really want to confirm this pin?');"
                                action="/pins/{{ $pin->id }}" method="post">
                                @method('put')
                                @csrf
                                <input type="submit" value="&#10004"/>
                                <!-- <p>&#10004</p> -->
</form>
                                <form
                                onsubmit="return confirm('Do you really want to delete the pin?');"
                                action="/pins/{{ $pin->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="x"/>
                                <!-- <p>&#10004</p> -->
</form>
                            </div>
                                @empty
                                <p>No pending pins..</p>
                              
							
                            @endforelse
					<!-- </div> -->
                    