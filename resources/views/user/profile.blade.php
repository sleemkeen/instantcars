@extends ('layouts.app')
@section('content')
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Profile</li>
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
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input value="Jennie Wilson" type="text">

					<label>Your Title</label>
					<input value="Agent In New York" type="text">

					<label>Phone</label>
					<input value="(123) 123-456" type="text">

					<label>Email</label>
					<input value="jennie@example.com" type="text">


					<h4 class="margin-top-50 margin-bottom-25">Address</h4>

					<label>Country</label>
					<input value="" type="text" name="country">

					<label>State</label>
					<input value="" type="text" name="state">

					<label>Address</label>
					<input value="" type="text" name="address">


				

					<h4 class="margin-top-50 margin-bottom-0">Vehicle</h4>

					<label> Vehicle Licence Registeration</label>
					<input value="https://www.twitter.com/" type="text">

					<label> Driver Licence</label>
					<input value="https://www.facebook.com/" type="text">



					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload">
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>


@include('layouts.footer')

@endsection