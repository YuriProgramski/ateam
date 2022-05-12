<header class="main-header">
		<div class="container flex">
			<h1 class="logo"><a href="/">
					<img src={{ URL::asset('assets/img/logo.png') }} />
				</a></h1>
			<div class="topnav" id="myTopnav">
				
				<a href="/about">About</a>
				<a href="/contact">Contact</a>
			@guest
				<a href="/login">Login</a>
				@endguest
				@auth
				<a href="/profile">Profile</a>
				@endauth
				
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</div>
	</header>