@extends ('layouts.app')
@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
	================================================== -->
	<div class="parallax" data-background="images/home-parallax-2.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="search-container">

						<!-- Form -->
						<h2>Find New Home</h2>

						<!-- Row With Forms -->
						<div class="row with-forms">

							<!-- Property Type -->
							<div class="col-md-3">
								<select data-placeholder="Any Type" class="chosen-select-no-single" >
									<option>Apartments</option>
									<option>Houses</option>
									<option>Commercial</option>
									<option>Garages</option>
									<option>Lots</option>
								</select>
							</div>

							<!-- Status -->
							<div class="col-md-3">
								<select data-placeholder="Any Status" class="chosen-select-no-single" >
									<option>For Sale</option>
									<option>For Rent</option>
								</select>
							</div>

							<!-- Main Search Input -->
							<div class="col-md-6">
								<div class="main-search-input">
									<input type="text" placeholder="Enter address e.g. street, city or state" value=""/>
									<button class="button"><i class="fa fa-search"></i></button>
								</div>
							</div>

						</div>
						<!-- Row With Forms / End -->

						<!-- Browse Jobs -->
						<div class="adv-search-btn">
							Need more search options? <a href="listings-list-full-width.html">Advanced Search</a>
						</div>

						<!-- Announce -->
						<div class="announce">
							We’ve 1000 properties for you!
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
				<h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
			</div>
			
			<!-- Carousel -->
			<div class="col-md-12">
				<div class="col-md-3 carousel">
					<div class="carousel-item">
						<div class="listing-item">

							<a href="single-property-page-1.html" class="listing-img-container">

								<div class="listing-badges">
									<span class="featured">Featured</span>
									<span>For Sale</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/listing-01.jpg" alt=""></div>
									<div><img src="images/listing-01b.jpg" alt=""></div>
									<div><img src="images/listing-01c.jpg" alt=""></div>
								</div>

							</a>
							
							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="single-property-page-1.html">Eagle Apartments</a></h4>
									<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
										<i class="fa fa-map-marker"></i>
											9364 School St. Lynchburg, NY
									</a>
								</div>

								<ul class="listing-features">
									<li>Area <span>530 sq ft</span></li>
									<li>Bedrooms <span>2</span></li>
									<li>Bathrooms <span>1</span></li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> David Strozier</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					
				</div>
				<div class="col-md-3 carousel">
					<div class="carousel-item">
						<div class="listing-item">

							<a href="single-property-page-1.html" class="listing-img-container">

								<div class="listing-badges">
									<span class="featured">Featured</span>
									<span>For Sale</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
									<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
									<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
								</div>

								<div class="listing-carousel">
									<div><img src="images/listing-01.jpg" alt=""></div>
									<div><img src="images/listing-01b.jpg" alt=""></div>
									<div><img src="images/listing-01c.jpg" alt=""></div>
								</div>

							</a>
							
							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="single-property-page-1.html">Eagle Apartments</a></h4>
									<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
										<i class="fa fa-map-marker"></i>
										9364 School St. Lynchburg, NY
									</a>
								</div>

								<ul class="listing-features">
									<li>Area <span>530 sq ft</span></li>
									<li>Bedrooms <span>2</span></li>
									<li>Bathrooms <span>1</span></li>
								</ul>

								<div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> David Strozier</a>
									<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
								</div>

							</div>

						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					
				</div>
			</div>
			<!-- Carousel / End -->

		</div>
	</div>



	<!-- Fullwidth Section -->
	<section class="fullwidth margin-top-95 margin-bottom-0">

		<!-- Box Headline -->
		<h3 class="headline-box">Articles & Tips</h3>

		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<!-- Blog Post -->
					<div class="blog-post">
						
						<!-- Img -->
						<a href="blog-post.html" class="post-img">
							<img src="images/blog-post-01.jpg" alt="">
						</a>
						
						<!-- Content -->
						<div class="post-content">
							<h3><a href="#">8 Tips to Help You Finding New Home</a></h3>
							<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

							<a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
						</div>

					</div>
					<!-- Blog Post / End -->

				</div>

				<div class="col-md-4">

					<!-- Blog Post -->
					<div class="blog-post">
						
						<!-- Img -->
						<a href="blog-post.html" class="post-img">
							<img src="images/blog-post-02.jpg" alt="">
						</a>
						
						<!-- Content -->
						<div class="post-content">
							<h3><a href="#">Bedroom Colors You'll Never Regret</a></h3>
							<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

							<a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
						</div>

					</div>
					<!-- Blog Post / End -->

				</div>

				<div class="col-md-4">

					<!-- Blog Post -->
					<div class="blog-post">
						
						<!-- Img -->
						<a href="blog-post.html" class="post-img">
							<img src="images/blog-post-03.jpg" alt="">
						</a>
						
						<!-- Content -->
						<div class="post-content">
							<h3><a href="#">What to Do a Year Before Buying Apartment</a></h3>
							<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

							<a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
						</div>

					</div>
					<!-- Blog Post / End -->

				</div>

			</div>
		</div>
	</section>
	<!-- Fullwidth Section / End -->


	<!-- Flip banner -->
	<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
		<div class="flip-banner-content">
			<h2 class="flip-visible">We help people and homes find each other</h2>
			<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
		</div>
	</a>
	<!-- Flip banner / End -->

<!-- Footer
	================================================== -->
	@include('layouts.footer')

	@endsection