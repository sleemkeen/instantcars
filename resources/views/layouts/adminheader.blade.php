
<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<link rel="stylesheet" href="'{{asset('admin/css/colors/main.css')}}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">
	<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/"><img src="images/logo.png" alt=""></a>
					<a href="/" class="dashboard-logo"><img src="{{asset('images/logoadmin.png')}}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="{{asset('images/dashboard-avatar.jpg')}}" alt=""></span>Hi, Tom!</div>
						<ul>
							<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="#"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="#" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clear-fix"></div>
<div id="dashboard" style="padding-top: 80px;">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner" style="max-height: 440px;">

			<ul data-submenu-title="Main">
				<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
				<li><a href="#"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
			</ul>
			
			<ul data-submenu-title="Listings">
				<li class=""><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="#">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="#">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="#">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>
				<li><a href="#"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="#"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
				<li><a href="#"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>

		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	
	<!-- Content / End -->

  @yield('content')
</div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('admin/scripts/jquery-2.2.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/custom.js')}}"></script>


</body>


</html>	

