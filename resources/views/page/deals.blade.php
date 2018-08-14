@extends ('layouts.app')
@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="images/carr.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Browse Cars</h2>
					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Cars</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			<div class="main-search-input margin-bottom-35">
				<input type="text" class="ico-01" placeholder="Enter address e.g. street, city and state or zip" value=""/>
				<button class="button">Search</button>
			</div>

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">

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
							<div><img src="images/car1.jpg" alt=""></div>
							<div><img src="images/car2.jpg" alt=""></div>
							<div><img src="images/car3.jpg" alt=""></div>
						</div>
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Mercedes-Benz E-Class</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
									Mercedes-Benz | SUV | CFMR
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> David Strozier</a>
							<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">

						<div class="listing-badges">
							<span>For Rent</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$900 <i>monthly</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div><img src="images/car6.jpg" alt=""></div>

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Chevrolet Camaro</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
								Chevrolet-Camaro | SUV | CFMR
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
							<span><i class="fa fa-calendar-o"></i> 2 days ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Featured</span>
							<span>For Rent</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$1700 <i>monthly</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div><img src="images/car2.jpg" alt=""></div>

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Chevrolet</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
								Chevrolet | SUV | CFMR
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Chester Miller</a>
							<span><i class="fa fa-calendar-o"></i> 4 days ago</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">

						<div class="listing-badges">
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$420,000 <i>$770 / sq ft</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div class="listing-carousel">
							<div><img src="images/car1.jpg" alt=""></div>
						</div>

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Mercedes-Benz E-Class</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
								Mercedes-Benz | SUV | CFMR
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Kristen Berry</a>
							<span><i class="fa fa-calendar-o"></i> 3 days ago</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">
						<div class="listing-badges">
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$535,000 <i>$640 / sq ft</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div><img src="images/car3.jpg" alt=""></div>
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Mutang</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
								Mustang | SUV | CFMR
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Mabel Gagnon</a>
							<span><i class="fa fa-calendar-o"></i> 4 days ago</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->

				
				<!-- Listing Item -->
				<div class="listing-item">

					<a href="car-detail" class="listing-img-container">
						<div class="listing-badges">
							<span>For Rent</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$500 <i>monthly</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div><img src="images/car5.jpg" alt=""></div>
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="car-detail">Hummer Jeep</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								
								Hummer Jeep | Jeep
							</a>

							<a href="car-detail" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>Air conditioning </li>
							<li>Manual </li>
							<li>4 Seats </li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Charles Watson</a>
							<span><i class="fa fa-calendar-o"></i> 3 days ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->

			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find Car</h3>

					<!-- Row -->
					<div class="row with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<input type="text" class="ico-01" placeholder="Search Car" value="">
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Any Type</option>	
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->

					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Brooklyn</option>
								<option>Queens</option>
								<option>Houston</option>
								<option>Manhattan</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>San Antonio</option>
								<option>Bronx</option>
								<option>San Diego</option>
								<option>Dallas</option>
								<option>San Jose</option>
							</select>
						</div>
					</div>
					

					<br>

					<!-- Area Range -->
					<div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>

					<br>
					
					<!-- Price Range -->
					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div>



					<!-- More Search Options / End -->

					<button class="button fullwidth margin-top-30">Search</button>


				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>




@include('layouts.footer')

@endsection