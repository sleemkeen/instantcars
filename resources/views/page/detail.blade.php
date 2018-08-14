@extends ('layouts.app')
@section('content')

<div class="clearfix"></div>

<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="#" class="back-to-listings"></a>
				<div class="property-title">
					<h2>Mercedes Benz <span class="property-badge">For Hire</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
								Mercedes-Benz | SUV | CFMR
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">$200 / Month</div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				<a href="images/car1.jpg" data-background-image="images/car1.jpg" class="item mfp-gallery"></a>
				<a href="images/car2.jpg" data-background-image="images/car2.jpg" class="item mfp-gallery"></a>
				<a href="images/car3.jpg" data-background-image="images/car3.jpg" class="item mfp-gallery"></a>
				<a href="images/car4.jpg" data-background-image="images/car4.jpg" class="item mfp-gallery"></a>
				<a href="images/car5.jpg" data-background-image="images/car5.jpg" class="item mfp-gallery"></a>
				<a href="images/car6.jpg" data-background-image="images/car6.jpg" class="item mfp-gallery"></a>
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<div class="item"><img src="images/car1.jpg" alt=""></div>
				<div class="item"><img src="images/car2.jpg" alt=""></div>
				<div class="item"><img src="images/car3.jpg" alt=""></div>
				<div class="item"><img src="images/car4.jpg" alt=""></div>
				<div class="item"><img src="images/car5.jpg" alt=""></div>
				<div class="item"><img src="images/car6.jpg" alt=""></div>
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Air conditioning </li>
					<li>Manual </li>
					<li>4 Seats </li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis. 
					</p>

					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.
					</p>

					<p>
						Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.
					</p>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>

				<!-- Details -->
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					<li>Building Age: <span>2 Years</span></li>
					<li>Parking: <span>Attached Garage</span></li>
					<li>Cooling: <span>Central Cooling</span></li>
					<li>Heating: <span>Forced Air, Gas</span></li>
					<li>Sewer: <span>Public/City</span></li>
					<li>Water: <span>City</span></li>
					<li>Exercise Room: <span>Yes</span></li>
					<li>Storage Room: <span>Yes</span></li>
				</ul>


				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				<ul class="property-features checkboxes margin-top-0">
					<li>Air Conditioning</li>
					<li>Swimming Pool</li>
					<li>Central Heating</li>
					<li>Laundry Room</li>
					<li>Gym</li>
					<li>Alarm</li>
					<li>Window Covering</li>
					<li>Internet</li>
				</ul>


				<!-- Floorplans -->
				<h3 class="desc-headline no-border">Floorplans</h3>
				<!-- Accordion -->
				<div class="style-1 fp-accordion">
					<div class="accordion">

						<h3>First Floor <span>460 sq ft</span> <i class="fa fa-angle-down"></i> </h3>
						<div>
						<a class="floor-pic mfp-image" href="../../../i.imgur.com/kChy7IU.jpg">
							<img src="../../../i.imgur.com/kChy7IU.jpg" alt="">
						</a>
						<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
						</div>

						<h3>Second Floor <span>440 sq ft</span> <i class="fa fa-angle-down"></i></h3>
						<div>
							<a class="floor-pic mfp-image" href="../../../i.imgur.com/l2VNlwu.jpg">
								<img src="../../../i.imgur.com/l2VNlwu.jpg" alt="">
							</a>
							<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
						</div>

						<h3>Garage <span>140 sq ft</span> <i class="fa fa-angle-down"></i></h3>
						<div>
							<a class="floor-pic mfp-image" href="../../../i.imgur.com/0zJYERy.jpg">
								<img src="../../../i.imgur.com/0zJYERy.jpg" alt="">
							</a>
						</div>

					</div>
				</div>


				<!-- Similar Listings Container -->
				<h3 class="desc-headline no-border margin-bottom-35 margin-top-60">Similar Properties</h3>

				<!-- Layout Switcher -->

				<div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a></div>
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
							<span class="featured">Featured</span>
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
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
							<span class="featured">Featured</span>
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
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

				</div>
				<!-- Similar Listings Container / End -->

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-30">
					<button class="widget-button with-tip" data-tip-content="Print"><i class="sl sl-icon-printer"></i></button>
					<button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i class="fa fa-star-o"></i></button>
					<button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"><i class="icon-compare"></i></button>
					<div class="clearfix"></div>
				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="images/agent-avatar.jpg" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#">Jennie Wilson</a></h4>
								<span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
						<input type="text" placeholder="Your Phone">
						<textarea>I'm interested in this property [ID 123456] and I'd like to know more details.</textarea>
						<button class="button fullwidth margin-top-5">Send Message</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-30 margin-top-30">Mortgage Calculator</h3>
					
					<!-- Mortgage Calculator -->
					<form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="USD">
						<div class="calc-input">
							<div class="pick-price tip" data-tip-content="Set This Property Price"></div>
						    <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
						    <label for="amount" class="fa fa-usd"></label>
						</div>

						<div class="calc-input">
						    <input type="text" id="downpayment" placeholder="Down Payment">
						    <label for="downpayment" class="fa fa-usd"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="years" placeholder="Loan Term (Years)" required>
							<label for="years" class="fa fa-calendar-o"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="interest" placeholder="Interest Rate" required>
							<label for="interest" class="fa fa-percent"></label>
						</div>

						<button class="button calc-button" formvalidate>Calculate</button>
						<div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
					</form>
					<!-- Mortgage Calculator / End -->

				</div>
				<!-- Widget / End -->



			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>


@include('layouts.footer')

@endsection