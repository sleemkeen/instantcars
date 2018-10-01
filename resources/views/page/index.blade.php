@extends ('layouts.app')
@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
	================================================== -->
	<div class="parallax" data-background="images/carr.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="search-container">

						<!-- Form -->
						<h2>Find A Car</h2>

						<!-- Row With Forms -->
						<div class="row with-forms">
							<!-- Main Search Input -->
							<div class="col-md-6">
								<div class="main-search-input">
									<input type="text" placeholder="Pick up location" value=""/>
									
								</div>
							</div>

							<!-- Property Type -->
							<div class="col-md-3">
								<div class="main-search-input">
									<input type="text" placeholder="Pick date" value=""/>
								</div>
							</div>

							<!-- Status -->
							<div class="col-md-3">
								<div class="main-search-input">
									<input type="text" placeholder="Drop off date" value=""/>
									<button class="button"><i class="fa fa-search"></i></button>
								</div>
							</div>

							

						</div>
						<!-- Row With Forms / End -->

						<!-- Browse Jobs -->
					
						<!-- Announce -->
						<div class="announce">
							We’ve 1000 cars for you!
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>


<!-- Content
	================================================== -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline margin-bottom-25 margin-top-65">Book your perfect car</h3>
			</div>

			<!-- Carousel -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car1.jpg" alt=""></div>
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car3.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Mercedes-Benz E-Class</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Mercedes-Benz | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car1.jpg" alt=""></div>
									<div><img src="images/car3.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Chevrolet Camaro</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Chevrolet-Camaro | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car3.jpg" alt=""></div>
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car1.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Mustang</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Mustang | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									<span class="featured">Featured</span>
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car4.jpg" alt=""></div>
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car3.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Chevrolet Cruze</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Chevrolet-Cruze | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									<span class="featured">Featured</span>
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car6.jpg" alt=""></div>
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car1.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Honda Accord</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Honda-Accord | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="listing-item">

							<a href="car-detail" class="listing-img-container">

								<div class="listing-badges">
									
									<span>For Hire</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$20 / Month</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/car1.jpg" alt=""></div>
									<div><img src="images/car2.jpg" alt=""></div>
									<div><img src="images/car3.jpg" alt=""></div>
								</div>

							</a>

							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="car-detail">Mercedes-Benz G-Class</a></h4>
									<a href="#" class="listing-address popup-gmaps">
										
										Mercedes-Benz | SUV | CFMR
									</a>
								</div>

								<ul class="listing-features">
									<li>Air conditioning </li>
									<li>Manual </li>
									<li>4 Seats </li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> James Gordon</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					
					<div class="container">
						<div class="row">
						  <div class="col-md-4">
						  	
						  </div>
						  <div class="col-md-4">
						  	<button class="button fullwidth margin-top-30">View More</button>
						 
						  </div>
						  <div class="col-md-4">
						  	
						  </div>
							
						</div>
						
					</div>
				</div>
				
				
			</div>
			<!-- Carousel / End -->

		</div>
	</div>



	<!-- Fullwidth Section -->
	<section class="fullwidth margin-top-105 margin-bottom-0 padding-bottom-80 padding-top-95" data-background-color="#f7f7f7" style="background: rgb(247, 247, 247);">

	<!-- Box Headline -->
	<h3 class="headline-box">What Our Clients Say</h3>

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="testimonials-subtitle">We collect reviews from our customers so you can get an honest opinion of what an apartment is really like!</div>
			</div>

			<div class="col-md-4">
				<div class="testimonial-box">
					<div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
					<div class="testimonial-author">
						<img src="images/happy-client-01.jpg" alt="">
						<h4>Jennie Wilson <span>Rented Apartment</span></h4>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="testimonial-box">
					<div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
					<div class="testimonial-author">
						<img src="images/happy-client-02.jpg" alt="">
						<h4>Thomas Smith <span>Bought House</span></h4>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="testimonial-box">
					<div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
					<div class="testimonial-author">
						<img src="images/happy-client-03.jpg" alt="">
						<h4>Robert Lindstrom <span>Sold Apartment</span></h4>
					</div>
				</div>
			</div>

		</div>
	</div>

</section>


	<!-- Fullwidth Section / End -->



<!-- Footer
	================================================== -->
	@include('layouts.footer')

	@endsection