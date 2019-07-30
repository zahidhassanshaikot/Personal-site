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
                <li class="mr-lg-4 mr-3"><a href="#about">About</a></li>
                <li class="mr-lg-4 mr-3"><a href="#services">Services</a></li>
            
                <li><a href="#contact">Contact</a></li>
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



			<div class="col-lg-12 col-md-12 mt-md-0 mt-12"> 
				<img src="{{ asset( $obj_service->image) }}" style="width: 100%;height: 450px;" alt="images" class="img-fluid" />
				<div class="exp wthree">	
					<h4>{{ $obj_service->title }} <span>{{ $obj_service->price }} tk</span></h4>
					<div class="clearfix"></div>
					<p>{{ $obj_service->short_description }}</p>
</br>
					<p>{{ $obj_service->long_description }}</p>
				</div>
			</div>

		</div>
	</div>
	
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