@include('layouts.includes.head')

<body>
@include('layouts.includes.navheader')

@yield('banner')
  
	<div class="main">
	<section class="firstsect">
		<div class="container">
		
			@yield('firstsectcontent')
</div>
	</section>
	
	@yield('main')
			<!-- <div class="row">
				<div class="col-12 col-md-8">
					<h1>Hallo wereld</h1>
					<div class="gallery">
						<div class="row">
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
							<div class="col-6 col-sm-4 col-lg-2">
								<img src="https://picsum.photos/600/300" alt="">
							</div>
						</div>
					</div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est obcaecati, autem modi, excepturi veniam corrupti hic, voluptatibus, ullam ea sequi deserunt. Dicta facere quia libero ad deleniti, unde velit voluptatem quis architecto eius nesciunt minus dolorum illo laboriosam eveniet, reiciendis accusamus inventore nisi repellendus. Ab, tempore totam sunt eius laborum illum, impedit, exercitationem in error beatae accusamus sit molestias? Libero placeat voluptatibus, dicta consequatur alias? Veritatis corporis dolores libero rem, obcaecati doloremque esse odio quidem neque dolore, repellendus qui at, nulla eveniet. Soluta amet qui iure sit, neque ducimus aliquam officiis, quas cupiditate, quo corrupti, quidem. Odio nemo, mollitia soluta id exercitationem iste consectetur animi. Pariatur eos inventore, rerum natus voluptatum aliquam, quibusdam, autem laborum veritatis odit modi, quaerat. Cupiditate, officiis harum voluptate quidem fugit rerum. Nisi possimus reprehenderit quae veniam ducimus vel, magni ex. Laudantium quae magnam, est quo velit, facilis asperiores quidem explicabo voluptatum at, ipsa officiis quos.</p>
				</div>
				<div class="col-12 col-md-4">
					<h2>Sidebar</h2>
					<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Assumenda soluta exercitationem voluptatum rerum recusandae beatae in, reprehenderit! Nulla in accusamus, nam modi aperiam officiis rem delectus minima totam. Id, excepturi.</p>
				</div> -->
			

			<!-- <div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<img src="https://picsum.photos/600/300" alt="">
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<img src="https://picsum.photos/600/300" alt="">
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<img src="https://picsum.photos/600/300" alt="">
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<img src="https://picsum.photos/600/300" alt="">
				</div>
			</div> -->
	</div>

   @include('layouts.includes.footer')
	<!-- -->
</body>
@include('layouts.includes.script')
</html>