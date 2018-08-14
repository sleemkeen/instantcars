@extends ('layouts.app')
@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="aboutbackground">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Faq</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>About</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
		<!-- Headline -->
		<h4 class="headline with-border margin-top-0 margin-bottom-35">Blockquote</h4>
		<blockquote>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.</blockquote>
		</div>
</div>
</div>

@include('layouts.footer')

@endsection