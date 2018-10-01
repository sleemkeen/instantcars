@extends ('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 hidden-sm logbg">
			<div class="logtitle">
				<h1>Login To Your <br> Dashboard</h1> <br>
				<p>
					INSTANT CARS is a car sharing platform where travelers, tourists,
					etc., <br>can rent just about any car of their choice, 
					wherever they want it from our <br> thriving space of local car
				owners.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="userlog">

				<button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
				<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
				<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button>

				<!--Tab -->
				<div class="my-account style-1 margin-top-5 margin-bottom-40">

					<ul class="tabs-nav">
						<li class="active"><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="">
							<form method="post" class="login" action="{{route('user.login')}}">
@csrf
								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="">
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password">
									</label>
								</p>

								<p class="form-row">
									<input type="submit" class="button border margin-top-10" name="login" value="Login">

									<label for="rememberme" class="rememberme">
										<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
									</p>

									<p class="lost_password">
										<a href="#">Lost Your Password?</a>
									</p>

								</form>
							</div>

							<!-- Register -->
							<div class="tab-content" id="tab2" style="display: none;">

								<form method="post" class="register">

									<p class="form-row form-row-wide">
										<label for="username2">Username:
											<i class="im im-icon-Male"></i>
											<input type="text" class="input-text" name="username" id="username2" value="">
										</label>
									</p>

									<p class="form-row form-row-wide">
										<label for="email2">Email Address:
											<i class="im im-icon-Mail"></i>
											<input type="text" class="input-text" name="email" id="email2" value="">
										</label>
									</p>

									<p class="form-row form-row-wide">
										<label for="password1">Password:
											<i class="im im-icon-Lock-2"></i>
											<input class="input-text" type="password" name="password1" id="password1">
										</label>
									</p>

									<p class="form-row form-row-wide">
										<label for="password2">Repeat Password:
											<i class="im im-icon-Lock-2"></i>
											<input class="input-text" type="password" name="password2" id="password2">
										</label>
									</p>

									<p class="form-row">
										<input type="submit" class="button border fw margin-top-10" name="register" value="Register">
									</p>

								</form>
							</div>

						</div>
					</div>



				</div>
			</div>
		</div>
	</div>


	@include('layouts.footer')

	@endsection