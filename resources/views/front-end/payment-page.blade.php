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
		<h3 class="heading" style="margin-top: 8%;">Payment</h3>
		<div class="exp-grids">

                        <div class="panel-body">
                            <div class="position-center">
                            	 @if(Session::get('message'))
                   
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                            </div>
                        	@endif
                                <form role="form" action="{{ route('save-payment-info')}}" method="POST" enctype="multipart/form-data">
                                	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Transection Id</label>
                                    <input type="text" class="form-control" name="trxId" id="exampleInputEmail1" placeholder="Transection Id" required> 

                                   	<input type="hidden" value="{{ $service_id }}" class="form-control" name="service_id"> 
                                </div>

                               
                       
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
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