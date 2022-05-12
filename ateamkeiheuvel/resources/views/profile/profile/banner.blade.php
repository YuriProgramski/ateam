<div class="container">

<h1 class="banner-slogan">
    Profile
</h1>

<article class="banner-user">

    <div class="banner-user-image-profile">
    @if($user->id == 1)    
    <p class="confirm confirmer">Hello, admin :) </p>
    @endif
    <div class="row">
				<div class="col-12 col-md-8">
                    <p><i>name:</i></p>
					<h1>{{$user->name}}</h1>
                    <p><i>email:</i></p>
					<h1>{{$user->email}}</h1>
                    @if(session('confirm'))
                    <p class="confirm confirmer">{{ session('confirm') }} </p>
            @endif
            @if(session('pass'))
                    <p class="confirm confirmer">{{ session('pass') }} </p>
            @endif
            </div>
				<div class="col-12 col-md-4">
					<h1 class="profilemenu">Menu</h1>
                    <a href="{{ route('profile.edit') }}" class="button profilemenu">edit profile</a>
                    @if($user->id !== 1)
                    <a onclick="showmyreservations()" href="#myreservations" class="button profilemenu">my reservations
                    @if($myreservations->count() > 0)
                    ({{$myreservations->count()}})
                    @endif</a>
                    <a onclick="showmypins()"href="#mypins" class="button profilemenu">my pins
                    @if($mypins->count() > 0)
                    ({{$mypins->count()}})
                    @endif
                    </a>
                @endif
                    @if($user->id == 1)  
                    <hr style="width:88px;">  
                    <a onclick="showpins()" href="#pins" class="button profilemenu">pins
                    @if($pendingpins->count() > 0)
                    ({{$pendingpins->count()}})
                    @endif
                </a>
                    <a onclick="showreservations()" href="#reservations" class="button profilemenu">reservations
                    @if($pendingreservations->count() > 0)
                    ({{$pendingreservations->count()}})
                    @endif
                </a>
               
                    
    @endif
                    <hr style="width:88px;">
                    <a
                    onClick="return confirm('Do you really want to logout?');"
                    href="{{ route('logout') }}" class="button profilemenu">logout</a>
                </div>
                
			</div>
           
    </div>
   
</article>

</div>