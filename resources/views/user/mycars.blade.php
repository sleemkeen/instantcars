@extends ('layouts.app')
@section('content')
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Change Password</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My cars</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">


		<!-- Widget -->
		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="profile" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="mycars"><i class="sl sl-icon-docs"></i> My Cars</a></li>
						<li><a href="submit-a-car"><i class="sl sl-icon-action-redo"></i> List New Cars</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="changepassword"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>

	<div class="col-md-8">
			<table class="manage-table responsive-table">

				<tbody><tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Expiration Date</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-02.jpg" alt="">
						<div class="title">
							<h4><a href="#">Serene Uptown</a></h4>
							<span>6 Bishop Ave. Perkasie, PA </span>
							<span class="table-property-price">$900 / monthly</span>
						</div>
					</td>
					<td class="expire-date">December 30, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #2 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-05.jpg" alt="">
						<div class="title">
							<h4><a href="#">Oak Tree Villas</a></h4>
							<span>71 Lower River Dr. Bronx, NY</span>
							<span class="table-property-price">$535,000</span>
						</div>
					</td>
					<td class="expire-date">December 12, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #3 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-04.jpg" alt="">
						<div class="title">
							<h4><a href="#">Selway Apartments</a></h4>
							<span>33 William St. Northbrook, IL </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="expire-date">December 04, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #4 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-06.jpg" alt="">
						<div class="title">
							<h4><a href="#">Old Town Manchester</a></h4>
							<span> 7843 Durham Avenue, MD  </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="expire-date">November 27, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

			</tbody></table>
			<a href="submit-property.html" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>

@include('layouts.footer')

@endsection