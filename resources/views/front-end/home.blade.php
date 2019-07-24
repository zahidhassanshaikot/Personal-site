<!DOCTYPE html>
<html lang="en">
<head>
<title></title>

	<!-- css files -->
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{ asset('front-end') }}/css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font--><link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- //header -->
<header>	
	<div class="container" id="home">
		<!-- nav -->
		<nav class="py-4">
        <div id="logo">
			<h1> <a href="{{route('/')}}"><span class="fa fa-rebel" aria-hidden="true"></span> Activity</a></h1>
		</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-4 mr-3 active"><a href="{{ route('/') }}">Home</a></li>
                <li class="mr-lg-4 mr-3"><a href="{{ route('/') }}/#about">About</a></li>
                <li class="mr-lg-4 mr-3"><a href="{{ route('service') }}">Services</a></li>
            
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
		
<!-- banner -->
<section class="banner">
	<div class="banner-layer">
		<div class="container">
			<div class="row w3pvt_banner_info">
				<div class="col-md-8 w3layouts_banner_margin">
					<h3 class="editContent">My name is </h3>
					<h2 class="editContent">{{  $obj_user->name}}</h2>
					<h4>{{  $obj_user->designation}}</h4>
					<p>{{  $obj_user->short_description}}</p> 
					<a href="#contact"> Contact Me </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->	

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-3">
		<h3 class="heading">About Me</h3>
		<div class="row about-grids">
			<div class="col-lg-6">
				<h4 class="">{{ $obj_about->title }}</h4>
				<p class="my-4">{{ $obj_about->short_description }}</p>
				
			</div>
			<div class="col-lg- col-md-6 my-lg-0 my-5">
				<img src="{{ $obj_about->image }}" alt="image" class="img-fluid" />
			</div>
<!-- 			<div class="col-lg-4 bar-grids">
				<div class="wthree_skills">
					<h6 class="mb-2">Designing & Developing<span> 95% </span></h6>
					<p>Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum </p>
					<div class="my-4">
						<h6 class="mb-2">Java and Scripting<span> 85% </span></h6>
						<p>Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum </p>
					</div>
					<h6 class="mb-2">Photoshop & Editing<span>90% </span></h6>
					<p>Nulla viverra pharetra sem, eget pulvinar neque pharetra ac int. lorem ipsum </p>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!-- about -->

<!-- contact -->
<section class="contact py-5" id="contact">
	<div class="container py-3">
		<h3 class="heading">Contact</h3>
		<div class="row contact-grids">
			<div class="col-lg-5 contact-left">
				<h4 class="mb-4">Address Info</h4>
				<div class="row">
					<div class="col-1 pr-0 icon">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-11">
						<p>Shukrabadh, Dhanmondi-32</p>
						<p> Dhaka-1207</p>
					</div>
					<div class="col-1 pr-0 icon my-2">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>
					<div class="col-11 my-2">
						<p> +000 000 00000</p>
					</div>
					<div class="col-1 pr-0 icon">
						<span class="fa fa-envelope-open" aria-hidden="true"></span>
					</div>
					<div class="col-11">
						<p><a href="mailto:example@email.com"> mail@example.com</a></p>
					</div>
					<div class="map col-sm-11 mt-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.615837227884!2d90.383175!3d23.750804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc51fe98a4d2cd245!2sDaffodil+International+University!5e0!3m2!1sen!2sus!4v1563950646455!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<!-- 20% Discount on Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
					<!-- 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"></iframe> -->
					</div>
				</div>
			</div>
    

			<div class="col-lg-7 mt-lg-0 mt-5 contact-right">
				<h4 class="mb-4">Get In Touch</h4>


         @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            @if(Session::get('message_c'))
                <div class="alert alert-success" id="message_c">
                    <h3 class=" text-center text-success"> {{ Session::get('message_c') }}</h3>
                </div>
            @endif

				<form action="{{ route('send-contact-us-message') }}" method="post">
					@csrf
					<label><span class="fa mr-2 fa-user" aria-hidden="true"></span> Name</label>
					<input type="text" name="name" placeholder="Name" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-envelope-open" aria-hidden="true"></span>Email</label>
					<input type="email" name="email"  placeholder="Email Address" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-phone" aria-hidden="true"></span>Phone</label>
					<input type="text" name="phone_no"  placeholder="Phone" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-edit" aria-hidden="true"></span>Message</label>
					<textarea name="message"  placeholder="Message..." required=""></textarea>
					<button type="submit" class="btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

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
		<p>© 2019 acc <a href="#"> wwww</a> </p>
			<a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
		</div>
	</div>
</footer>
<!-- //footer -->


</body>
</html>