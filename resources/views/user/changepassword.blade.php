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
						<li>Change Password</li>
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
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>

					<label>Current Password</label>
					<input type="password">

					<label>New Password</label>
					<input type="password">

					<label>Confirm New Password</label>
					<input type="password">

					<a href="submit-property.html" class="margin-top-20 button">Save Changes</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 12 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

@include('layouts.footer')

@endsection