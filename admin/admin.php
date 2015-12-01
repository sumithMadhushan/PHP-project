<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Thilakna Tea Center</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
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
					<a class="navbar-brand" href=""><img src="../images/icon1.png"></a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  <!-- style="float:right; -->
				
						<ul class="nav navbar-nav nav-tabs"><!-- ul=url --><!-- and Tabs -->
							
							<li><a href="admin.php"><font color="green">Home</font></a></li><!--home nav-->
                            <li><a href="enter_data.php"><font color="green">Enter data</font></a></li>
							<li><a href="set_advance.php"><font color="green">Pay Advance</font></a></li>
							<li><a href="bill_cal.php"><font color="green">Calculate Bill</font></a></li>
                                
							<li class="dropdown"><!--Request nav-->
		          				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="green">Requests</font> <b class="caret"></b></a>
		          				<ul class="dropdown-menu">
						            
						            <li role="separator" class="divider"></li>
						            <li><a href="view_fer_req.php"><font color="green">View fertilizer requests</font></a></li>
									
									 <li role="separator" class="divider"></li>
						            <li><a href="view_ad_req.php"><font color="green">View payment requests</font></a></li>
						            

		          				</ul>
		        			</li>
		        			
		        			<!--Start of the log out form-->
							<ul class="nav navbar-nav navbar-right">
						        <li><p class="navbar-text"><font color="green"><font color="green">Are you want to logout ?</font></font></p></li>
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="green">Logout</font></b> <span class="caret"></span></a>
									<ul id="login-dp" class="dropdown-menu"> 
										<li>
											 <div class="row">
													<div class="col-md-12">
														<font color="green">Are you sure you want to log-out?</font>
														
														 <form class="form" role="form" method="post" action="../index.php">
																
													
															<li>
											        			<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>

																
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
	      <img src="../images/a.jpg" alt="One" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="../images/b.jpg" alt="Two" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="../images/c.jpg" alt="Three" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="../images/d.jpg" alt="Four" class="img-responsive">
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

<style type="text/css">
.panel{
	background-color: #e0f8ea;
}
</style>

<br><br>
<div class="container">
	<div class="row">

		<div class="col-md-4">
			<div class="panel panel-success"><!--kotuwak athulata daganne me widiyata-->
				<div class="panel-body">
					<h4><font color="#003300">Manage users</font></h4>
					
					<a href="../register.php" class="btn btn-success">Add Users</a><!--Add the read more button-->
					<a href="viewUsers.php" class="btn btn-success" target="_newpage">View Users</a>
					<a href="delete.php" class="btn btn-success">Remove Users</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-success"><!--kotuwak athulata daganne me widiyata-->
				<div class="panel-body">
					<h4><font color="#003300">Requests</font></h4>
					
					<a href="view_fer_req.php" class="btn btn-success">View Fertilizer Request</a>
					<br><br>
					<a href="view_ad_req.php" class="btn btn-success">View advanced Request</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-success"><!--kotuwak athulata daganne me widiyata-->
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
					<li><a href="admin.php"><font color="green">Index</font></a></li>
					
					<li><a href="#"><font color="green">Contact</font></a></li>
					<li><a href="#"><font color="green">About Us</font></a></li>
				</ul>	
			</div>
		</div>
	</div>
	

</footer>

<!-- End of the footer -->

		<script type="text/javascript" src = "../js/jquery.js"> </script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>
</html> 