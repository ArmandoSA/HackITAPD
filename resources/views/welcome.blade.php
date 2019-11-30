<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calssimax</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- CUSTOM CSS -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="/img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="index.html">
                        <img src="images/logo.png"  href="https://www.cisco.com/" alt="">
                        
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="index.html">Dashboard</a>
							</li> -->
							<!-- <li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
							
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="index.html">Category</a>
									<a class="dropdown-item" href="index.html">Single Page</a>
									<a class="dropdown-item" href="index.html">Store Single</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
							
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li> -->
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="index.html">Login</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1> Connecting Customers </h1>
					<p>Search the correct information  <br> for Cisco technologies </p>
					
				</div>
                <!-- Advance Search -->
                {!! Form::open(['url' => '/store', 'method' => 'POST']) !!}
				<div class="advance-search">
                
						<div class="row">
							<!-- Store Search -->
							<div class="col-sm-6 offset-sm-3 text-center">
								<div class="block d-flex">
                                    
                                    <input type="text"  class="form-control mb-2 mr-sm-2 mb-sm-0" name="hola" id="hola">
									<!-- Search Button -->
									<button type="submit" class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
                 {!! Form::close() !!}
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Results</h2>
					<p></p>
				</div>
			</div>
        </div>
        

        <div class="table-responsive">
        
    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            
             <th>Title</th>
             <th>Date</th>
             
             
        </tr>
        </thead>
        <tbody>
        @foreach($alldata as $order)
        <tr>
                
        
  

                    <td class="font-quicksand">
                    <a href="{{$order['fields']['uri'][0]}}">{!! str_replace('<key>', ' ', $order['fields']['title'][0]) !!}
                        <br>
                        <p>{!! str_replace('<key>', ' ', $order['fields']['text'][0]) !!}</p></td>

                        <td> 
                        
                        
                        </td>
                   
                          
                    
                
        </tr>
        @endforeach  
        
        </tbody>
    </table>
  </div>
      
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">

		</div>
	</div>
	<!-- Container End -->
</section>




<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          
         
          <!-- <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
     
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
       -->
    </div>
  </div>
  
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2019. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="/plugins/tether/js/tether.min.js"></script>
  <script src="/plugins/raty/jquery.raty-fa.js"></script>
  <script src="/plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="/plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="/js/scripts.js"></script>
  <script src="/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>

</body>

</html>



