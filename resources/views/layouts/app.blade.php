<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Recommender System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/">Hotel Recommender</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="/">Home</a></li>
                            <li><a href="{{route('hotels')}}">Hotels</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('listhotel')}}">Login / Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(./images/sheraton.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
                                    <h2>Find and book hotels in Lagos.</h2>
				   					<h1>Search through {{$counts->count()}} hotels in Lagos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(./images/oriental.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
                                    <h2>Find and book hotels in Lagos.</h2>
				   					<h1>Search through {{$counts->count()}} hotels in Lagos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(./images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
                                    <h2>Find and book hotels in Lagos.</h2>
				   					<h1>Search through {{$counts->count()}} hotels in Lagos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Search Hotel</a></li>

							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
                            <form method="POST" class="colorlib-form" action="{{route('search')}}">
                                @csrf
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Price From:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="pricefrom" name="pricefrom" class="form-control" placeholder="Price From">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Price To:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="priceto" name="priceto" class="form-control" placeholder="Price To">
				                    </div>
				                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="guests">Room Type</label>
                                      <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="roomtype" id="roomtype" class="form-control">
                                          <option value="#">Select Room Type</option>
                                          <option value="#">Single Room</option>
                                          <option value="#">Executive Room</option>
                                          <option value="#">Junior Room</option>
                                          <option value="#">Business Room</option>
                                          <option value="#">Presidential Room</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Hotels" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
				         </div>

			         </div>
					</div>
				</div>
			</div>
        </div>


        @yield('content')

        <footer id="colorlib-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 colorlib-widget">
                            <h4>Hotel Recommender System</h4>
                            <p>Our website helps you with hotels recommendations according to your budget</p>
                            <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Book Now</h4>
                            <p>
                                <ul class="colorlib-footer-links">

                                    <li><a href="#">Hotels</a></li>

                                </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Top Hotels</h4>
                            <p>
                                <ul class="colorlib-footer-links">
                                    @foreach($tops as $top)
                                <li><a href="{{route('hoteldetails', $top->hotelname)}}">{{$top->hotelname}}</a></li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>

                        <div class="col-md-3 col-md-push-1">
                            <h4>Contact Information</h4>
                            <ul class="colorlib-footer-links">
                                <li>Lagos State University, <br> Lagos, Nigeria</li>
                                <li><a href="tel://08154534343">+ 234 81 545 343 43</a></li>
                                <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><a href="#">yoursite.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="./js/jquery.min.js"></script>
	<!-- jQuery Easing -->
    <script src="./js/jquery.easing.1.3.js"></script>


	<!-- Bootstrap -->
	<script src="./js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="./js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="./js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="./js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="./js/jquery.magnific-popup.min.js"></script>
	<script src="./js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="./js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
    <script src="./js/jquery.stellar.min.js"></script>
	<!-- Main -->
    <script src="./js/main.js"></script>

	</body>
</html>
