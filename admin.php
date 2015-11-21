<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Thilakna Tea Center</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
<!-- start of the navigation bar -->

		<nav class="navbar navbar-inverse navbar-static-top no-margin" roll="navigation"> <!-- navigation bar -->
			<div class="container-fluid"> <!-- reserve area for css fluid-for moved to left corner -->
				<div class="navbar-header">
				<!--	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> -->
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        
			      	</button>
					<a class="navbar-brand" href="">Thilanka Tea Collecting Center</a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  <!-- style="float:right; -->
				
						<ul class="nav navbar-nav nav-tabs"><!-- ul=url --><!-- and Tabs -->
							
							<li><a href="admin.html">Home</a></li><!--home nav-->
                            <li><a href="enter_data.php">Enetr data</a></li>
                                
							<li class="dropdown"><!--Request nav-->
		          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Requests <b class="caret"></b></a>
		          				<ul class="dropdown-menu">
						            
						            <li role="separator" class="divider"></li>
						            <li><a href="view_fer_req.php">View fertilizer requests</a></li>//should create admin_fre_view
									
									 <li role="separator" class="divider"></li>
						            <li><a href="view_ad_req.php">View payment requests</a></li>
						            

		          				</ul>
		        			</li>
		        			<li><a href="contact.html">Contact</a></li>
							<li><a href="about.html">About us</a></li>
							
		        			<!--Start of the log out form-->
							<ul class="nav navbar-nav navbar-right">
						        <li><p class="navbar-text">Are you want to logout ?</p></li>
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Logout</b> <span class="caret"></span></a>
									<ul id="login-dp" class="dropdown-menu">
										<li>
											 <div class="row">
													<div class="col-md-12">
														Are you sure you want to log-out?
														
														 <form class="form" role="form" method="post" action="index.php">
																
													
															<li>
											        			<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

																
															</li>

														
														 </form>


													</div>
													<div class="bottom text-center">
														Log as another user! <a href="index.php"><b>login As</b></a>
													</div>
													
											 </div>
										</li>
									</ul>
						        </li>
							</ul>
		        			<!--End of the log out form-->

						</ul>


					</div>

			</div>	

		</nav>
<!-- End of the navigation bar -->

<!-- Header Carousel -->
<div id="myCarousel" class="carousel slide">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="images/a.jpg" alt="One" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="images/b.jpg" alt="Two" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="images/c.jpg" alt="Three" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="images/d.jpg" alt="Four" class="img-responsive">
	    </div>
	  </div>

  <!-- Left and right controls -->
  		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
</div>
<!-- end of Header Carousel -->

<!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
<!-- end of Header Carousel -->


<!-- Start of Adding text with logo -->
		<div class="jumbotron"> <!--add the cover photo (we also can add some text tht we want to highlight in there)-->
			<div class="container"> <!--add cover photo to middle of the web page-->
				<!--<img src="images/image.jpg" height="250px" class="pull-left"> -->
				<h2>This is my header</h2>
				<p>The MSWLogo interface is about as basic as it gets - in fact it's a bit like using MS Basic itself. There are tons of tutorials and even video guides to get you started with Logo, so you'll be able to build your own square or graph in no time.</p>

				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				<!--<img src="images/cover.png" class="img-responsive"> -->
			</div>
		</div>
<!-- End of Adding text with logo -->

<!-- Start of Adding paragraphs -->
		<div class="container">
			<div class="col-sm-6 col-md-3">
				<p>Concerning reliability the software Works 24/7. It manages network link failures and SMS service provider failures with automatic reconnect capability, backup routing and fail-safe load balancing. Message loop protection is also included to avoid threats caused by autoresponding mobile messaging services. For high-availability, an Ozeki NG SMS Gateway cluster can be setup with two or more nodes. 
				</p>

			</div>
			
			<div class="col-sm-6 col-md-3 col-md-offset-1 col-md-offset-1">
				<p>Concerning reliability the software Works 24/7. It manages network link failures and SMS service provider failures with automatic reconnect capability, backup routing and fail-safe load balancing. Message loop protection is also included to avoid threats caused by autoresponding mobile messaging services. For high-availability, an Ozeki NG SMS Gateway cluster can be setup with two or more nodes. 
				</p>
			</div>
			
			<div class="col-sm-6 col-md-3 col-md-offset-1 col-md-offset-1">
				<p>Concerning reliability the software Works 24/7. It manages network link failures and SMS service provider failures with automatic reconnect capability, backup routing and fail-safe load balancing. Message loop protection is also included to avoid threats caused by autoresponding mobile messaging services. For high-availability, an Ozeki NG SMS Gateway cluster can be setup with two or more nodes. 
			    </p>
			</div>

			<div class="col-sm-6 col-md-3">
				<p>Concerning reliability the software Works 24/7. It manages network link failures and SMS service provider failures with automatic reconnect capability, backup routing and fail-safe load balancing. Message loop protection is also included to avoid threats caused by autoresponding mobile messaging services. For high-availability, an Ozeki NG SMS Gateway cluster can be setup with two or more nodes. 
			    </p>
			</div>
			
		</div>
<!-- End of Adding paragraphs -->	
<!-- End of main web components -->	

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default"><!--kotuwak athulata daganne me widiyata-->
				<div class="panel-body">
					<h4>Web Based Services</h4>
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>Java Script</li>
						<li>PHP</li>
						<li>Word Press</li>
						<li>More..</li>
					</ul>
					<a href="#" class="btn btn-default">Read more</a><!--Add the read more button-->
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default"><!--kotuwak athulata daganne me widiyata-->
				<div class="panel-body">
					<h4>Mobile Based Services</h4>
					<ul>
						<li>Android</li>
						<li>IOS</li>
						<li>More..</li>
					</ul>
					<a href="#" class="btn btn-primary">Read more</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default"><!--kotuwak athulata daganne me widiyata-->
				<div class="panel-body">
					<h4>Web Based Services</h4>
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>Java Script</li>
						<li>PHP</li>
						<li>Word Press</li>
						<li>More..</li>
					</ul>
					<a href="#" class="btn btn-default">Read more</a>
				</div>
			</div>
		</div>


	</div>




</div>

<!-- start of the footer -->
<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h4>Contact Address</h4>
				<address>
					Thilanka Tea Collecting Center,<br> Warakapalahena,<br> Nakiyadeniya,<br> Galle.

				</address>

			</div>
			
		</div>
		<div class="bottom-footer">
			<div class="col-md-5">@ Copyright Thilanka Tea Center 2015.</div>
			<div class="col-md-7">
				<ul class="footer-nav">
					<li><a href="mainwindow.html">Index</a></li>
					
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About Us</a></li>
				</ul>	
			</div>
		</div>
	</div>
	

</footer>

<!-- End of the footer -->

		<script type="text/javascript" src = "js/jquery.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html> 