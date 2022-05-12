<aside class="main-footer">
		<div class="containerf">
			<section class="footersection">
				<h1 onClick=topFunction()>
					top
				</h1>
				<div class="logo">

					<p><a href="/">
							<img src={{ URL::asset('assets/img/logo.png') }} />
						</a></p>
				</div>
			</section>
			<section class="footersection">
				<h1>
					<a href="/about">About us</a>
				</h1>
				<ul>
					
					<li><a href="/about#strip">The airstrip</a></li>
					<li><a href="/fleet#fleet">Fleet</a></li>
					<li><a href="/crew#crew">Crew</a></li>
				</ul>
			</section>
			<section class="footersection">
				<h1>
					<a href="/contact">Connect</a>
				</h1>
				<ul>
				<li><a href="/contact#adres">Contact info</a></li>
					<li><a href="/#pinboard">Pinboard</a></li>
					<li><a href="www.facebook.com" target="_blank">Fb</a></li>
					<li><a href="www.instagram.com" target="_blank">IG</a></li>
				</ul>
			</section>
			<section class="footersection">
				<h1>
					<a href="/profile">Profile</a>
				</h1>
				<ul>
@guest
					<li><a href="/login">Login</a></li>
					<li><a href="/register">Register</a></li>
					@endguest
					@auth
					<li><a href="logout">Logout</a></li>
					@endauth
				
				</ul>
			</section>
		</div>
	</aside>