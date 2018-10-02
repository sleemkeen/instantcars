<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (123) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#">info@instantcars.ng</a></li>
				<!-- 	<li>
						<div class="top-bar-dropdown">
							<span>Dropdown Menu</span>
							<ul class="options">
								<li><div class="arrow"></div></li>
								<li><a href="#">Nice First Link</a></li>
								<li><a href="#">Second Link With Long Title</a></li>
								<li><a href="#">Third Link</a></li>
							</ul>
						</div>
					</li> -->
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					   <li><a class="facebook" href="https://www.facebook.com/Instantcarsng"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="https://twitter.com/instantcarsng"><i class="icon-twitter"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/"><img src="images/logo.png" alt=""></a>
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
				<nav id="navigation" class="style-1">
					<ul id="responsive">
						@include('layouts.mainnav')
						</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				@if(session('JWTUser'))

					<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Hi, {{session('JWTUser')->username}}!</div>
						<ul>
							<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="#"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="submit-a-car" class="button border">List your car</a>
				</div>
				@else
				<div class="header-widget">
					<a href="login" class="sign-in"> Log In </a>
					<a href="register" class="sign-in"> Register  </a>
					<a href="submit-a-car" class="button border">List your car</a>
				</div>

				@endif
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
