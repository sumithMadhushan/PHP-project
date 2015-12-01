<!doctype html>
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
					<a class="navbar-brand" href=""><img src="images/icon1.png"></a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  <!-- style="float:right; -->
				
						<ul class="nav navbar-nav nav-tabs"><!-- ul=url --><!-- and Tabs -->
							
							<li><a href="mainwindow.php"><font color="green">Home</font></a></li><!--home nav-->


							<li class="dropdown"><!--Request nav-->
		          				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="green">Requests</font> <b class="caret"></b></a>
		          				<ul class="dropdown-menu">
		            				<li><a href="fertilizer_req.php"><font color="green">Fertilizer request</font></a></li>
		            				<li><a href="advance_payment_req.php"><font color="green">Advance payment request</font></a></li>
						            
						            <li role="separator" class="divider"></li>
						            <li><a href="view_fer_req_cus.php"><font color="green">View sent requests</font></a></li>
									
									 <li role="separator" class="divider"></li>
						            <li><a href="view_ad_req_cus.php"><font color="green">View sent requests</font></a></li>
						            

		          				</ul>


		        			</li>
		        			<li><a href="contact.html"><font color="green">Contact</font></a></li>
							<li><a href="about.html"><font color="green">About us</font></a></li>
		          				
							
		        			<!--Start of the log out form-->
							<ul class="nav navbar-nav navbar-right">
						        <li><p class="navbar-text"><font color="green">Are you want to logout ?</font></p></li>
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="green">Logout</font></b> <span class="caret"></span></a>
									<ul id="login-dp" class="dropdown-menu">
										<li>
											 <div class="row">
													<div class="col-md-12">
														<font color="green">Are you sure you want to log-out?</font>
														
														 <form class="form" role="form" method="post" action="index.php">
																
													
															<li>
											        			<button class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

																
															</li>

														
														 </form>


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
				<h2 style="color:#008000">Thilakna Tea Collecting Center</h2>
				<p><font size="3" color="#00b300">Tea  Sales Centre is open from 9.00 am to 7.00 pm (except Sundays and poyaday)  to encourage local consumers to use branded, quality tea varieties.

The Tea Sales Centre at Thilanka Tea Collecting Center,Warakapalahena,Nakiyadeniya,Galle, opened for the public to purchase good quality Ceylon Tea.  The Sales Centre has the widest range of Ceylon Tea brands  available in overseas markets,  for sale to the local consumers encouraging them to  use branded, high quality tea varieties without going for unbranded loose teas

 At the Sri Lanka Tea Board Sales Centre, the consumers not only get to select among the best and widest range of Ceylon Tea brands they also get to see the diversity and variety in the tea category available today in the convenience of one place.</font> </p>

				<!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Read more</a></p>-->
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
				  Read more
				</button>

				<!-- start of the Modal popup window-->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel" style="color:#008000">Thilakna Tea Collecting Center</h4>
				      </div>
				      <div class="modal-body">
				      	

				        <p><font size="3" color="#00b300">Tea  Sales Centre is open from 9.00 am to 7.00 pm (except Sundays and poyaday)  to encourage local consumers to use branded, quality tea varieties.

The Tea Sales Centre at Thilanka Tea Collecting Center,Warakapalahena,Nakiyadeniya,Galle, opened for the public to purchase good quality Ceylon Tea.  The Sales Centre has the widest range of Ceylon Tea brands  available in overseas markets,  for sale to the local consumers encouraging them to  use branded, high quality tea varieties without going for unbranded loose teas

 At the Sri Lanka Tea Board Sales Centre, the consumers not only get to select among the best and widest range of Ceylon Tea brands they also get to see the diversity and variety in the tea category available today in the convenience of one place.</font> </p>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
				        
				      </div>
				    </div>
				  </div>
				</div>

				<!-- end of the Modal popup window-->
				<!--<img src="images/cover.png" class="img-responsive"> -->
			</div>
		</div>
<!-- End of Adding text with logo -->

<!-- Start of Adding paragraphs -->
		<div class="container">
			<div class="col-sm-6 col-md-3">
				<p style="color:#00b300">The Analytical Laboratory of Sri Lanka Tea Board was established in 1986 in order to check and certify the quality of Ceylon tea.  

Our Laboratory carried out tests in accordance with accepted International methods. We are committed to advising, monitoring, inspecting and guiding to achieve and maintain high standards of quality in final product of Ceylon tea. All activities of Analytical Laboratory complies with the ISO 17025:2005 Standard and the requirements of Sri Lanka Accreditation Board. 
				</p>

			</div>
			
			<div class="col-sm-6 col-md-3 col-md-offset-1 col-md-offset-1">
				<p style="color:#00b300">The Analytical Laboratory operates ISO/IEC 17025-accredited, state-of-the-art labs with world class laboratory facilities at its permanent location, in the New Laboratory building of Sri Lanka Tea Board situated at 574/1, Galle Road, Colombo 03, Sri Lanka, where separate floors are assigned for each unit specific to their function and/or operations, Microbiological Analysis Unit, Chemical Analysis Unit and Pesticide Residue Analysis Unit . 
				</p>
			</div>
			
			<div class="col-sm-6 col-md-3 col-md-offset-1 col-md-offset-1">
				<p style="color:#00b300">In another first for Sri Lanka Tea Board (SLTB), ‘Ceylon Tea Moments,’ the first ever Ceylon Tea House was launched at the Grand Stand, Race Course Complex, Colombo 07, a landmark site in Colombo famous for its historic importance and architectural uniqueness making it the ideal place for the 2nd most favoured beverage in the world; Tea. Developing an international chain of tea houses is part of SLTB’s three year Promotion & Marketing plan since Ceylon Tea being a premium brand, promoting it via tea houses and lounges to market the experience will be essential to sustain and build the brand image. 
			    </p>
			</div>

			<!--<div class="col-sm-6 col-md-3">
				<p>Concerning reliability the software Works 24/7. It manages network link failures and SMS service provider failures with automatic reconnect capability, backup routing and fail-safe load balancing. Message loop protection is also included to avoid threats caused by autoresponding mobile messaging services. For high-availability, an Ozeki NG SMS Gateway cluster can be setup with two or more nodes. 
			    </p>
			</div>-->
			
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
				<h4><font color="green">Contact Address</font></h4>
				<address>
					<font color="green">Thilanka Tea Collecting Center,<br> Warakapalahena,<br> Nakiyadeniya,<br> Galle.</font>

				</address>

			</div>
			
		</div>
		<div class="bottom-footer">
			<div class="col-md-5"><font color="green">@ Copyright Thilanka Tea Center 2015.</font></div>
			<div class="col-md-7">
				<ul class="footer-nav">
					<li><a href="mainwindow.php"><font color="green">Index</font></a></li>
					
					<li><a href="contact.html"><font color="green">Contact</font></a></li>
					<li><a href="about.html"><font color="green">About Us</font></a></li>
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

<!--
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					
				</div>
			</div>
		</div>
	</div>
</div>-->