<h1 class="section-title">My pins</h1>
			<!-- <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> -->
            <div class="row">
                @forelse ($mypins as $pin)
                <div class="col-6 col-sm-4 col-lg-2 pin">
								<b>{{$pin->buzzword}}</b>
								<p>{{$pin->content}}</p>
								<i>- {{$pin->name}}</i>
							
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
                                <p>No pins..</p>
                              
							
                            @endforelse