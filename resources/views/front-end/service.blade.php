<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
	

	<!-- css files -->
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- //header -->
<header style="background-color:black">	
	<div class="container" id="home">
		<!-- nav -->
		<nav class="py-4">
        <div id="logo">
			<h1> <a href="{{ route('/') }}"><span class="fa fa-rebel" aria-hidden="true"></span> Activity</a></h1>
		</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-4 mr-3 active"><a href="{{ route('/') }}">Home</a></li>
                <li class="mr-lg-4 mr-3"><a href="{{ route('/') }}/#about">About</a></li>
                <li class="mr-lg-4 mr-3"><a href="{{ route('service') }}">Services</a></li>
            
                <li><a href="{{ route('/') }}/#contact">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- services -->
<section class="experience py-5" id="services">
	<div class="container py-3">
		<h3 class="heading" style="margin-top: 8%;">Services</h3>
		<div class="row exp-grids">

			@foreach($obj_service as $service )
			<div class="col-lg-4 col-md-6">
				<a href="{{route('service-details',['id'=>$service->id]) }}"><img src="{{ $service->image }}" alt="image" class="img-fluid" /> </a>
				<div class="exp wthree">	
					<h4>{{ $service->title }} <span>{{ $service->price }} tk</span></h4>
					<div class="clearfix"></div>
					<p>{{ $service->short_description }}</p>
				</div>
			</div>
			@endforeach

<!-- 			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<img src="{{ asset('front-end') }}/images/exp2.jpg" alt=" " class="img-fluid" />
				<div class="exp wthree">	
					<h4>App Developer <span>2007 - 2010</span></h4>
					<div class="clearfix"></div>
					<p>Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum Vestibulum. placerat placerat dolor. Vestibulum at dui nunc.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<img src="{{ asset('front-end') }}/images/exp3.jpg" alt=" " class="img-fluid" />
				<div class="exp wthree">	
					<h4>Web Developer <span>2007 - 2010</span></h4>
					<div class="clearfix"></div>
					<p>Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum Vestibulum. placerat placerat dolor. Vestibulum at dui nunc.</p>
				</div>
			</div> -->
		</div>
	</div>
	{{ $obj_service->links() }}
</section>
<!-- //experience -->

<!-- footer -->
<footer class="py-5">
	<div class="container">
		<div class="w3layoutsinfo-grids">
			<div class="w3layouts-grid-left w3layouts-grid-right text-center">
				<div class="social mb-4">
					<ul>
						<li><a href="#"><span class="fa mr-2 fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa mr-2 fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa mr-2 fa-google-plus"></span></a></li>
						<li><a href="#"><span class="fa mr-2 fa-pinterest"></span></a></li>
						<li><a href="#"><span class="fa mr-2 fa-vk"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
			<p>© 2018 Activity <a href="#"> WWW</a> </p>
			<a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
		</div>
	</div>
</footer>
<!-- //footer -->


</body>
</html>