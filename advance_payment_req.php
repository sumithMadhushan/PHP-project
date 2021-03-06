<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Send a advanced payment request</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
<!-- start of the navigation bar -->

		<nav class="navbar navbar-inverse navbar-static-top" roll="navigation"> <!-- navigation bar -->
			<div class="container-fluid"> <!-- reserve area for css fluid-for moved to left corner -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        
			      	</button>
					<a class="navbar-brand" href="advance_payment_req.php"><font color="green">Request For Advance</font></a> <!-- for replace with image: <img src="path of the image file"> -->
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

<?php

require_once("includes/initialize.php");

if(isset($_POST['submit'])){
    

	$cuz_id=trim(mysql_prep($_POST['cuz_id']));
	$fer_type=trim(mysql_prep($_POST['fer_type']));
	$name=trim(mysql_prep($_POST['name']));
	$quantity=trim(mysql_prep($_POST['quantity']));
	$date=trim(mysql_prep($_POST['date']));

		if(empty($errors)){
		
			$new_req=new Request();
			
			$new_req->cuz_id=$cuz_id;
			$new_req->fer_type=$fer_type;
			$new_req->name=$name;
			$new_req->quantity=$quantity;
			$new_req->date=$date;       
			
			$rslt=$new_req->create();
			
			if($rslt) {
				echo "<div class=\"container\">
						<div class=\"row\">
							<div class=\"col-md-7\">
								<div class=\"panel panel-default\">
									<div class=\"panel-body\">
										<h4>Your request has been successfully sent<h4><br>
										<h4>Thank You!<h4><br>
									</div>
								</div>
							</div>
						</div>
					</div>
					";
			} else {
				 echo "<div class=\"container\">
						<div class=\"row\">
							<div class=\"col-md-7\">
								<div class=\"panel panel-default\">
									<div class=\"panel-body\">
										<h4>Error!<h4><br>
										<h4>Your request has not been sent<h4><br>									
									</div>
								</div>
							</div>
						</div>
					</div>
					";
			}
				
		}else{
			 echo "<div class=\"container\">
						<div class=\"row\">
							<div class=\"col-md-7\">
								<div class=\"panel panel-default\">
									<div class=\"panel-body\">
										<h4>Error!<h4><br>
										<h4>Your request has not been sent<h4>.<br>
									</div>
								</div>
							</div>
						</div>
					</div>
					";
	}

}else{
	$cuz_id="";
	$fer_type="";
	$name="";
	$quantity="";
	$date="";	
$form = <<<EOT

<div class="container">
	<div class="row">
		

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">

				<form class="navbar-form navbar-left" id="req_form" action="fertilizer_req.php" method="post">
  					<div class="form-group">
					    <label>Customer ID</label><br><input type="text" id="name" name="cuz_id" class="form-control" placeholder="003">
					</div>
					<br><br>
					<div class="form-group">
						<label>Amount:</label><br><input type="text" id="textF" name="amount" class="form-control" placeholder=" eg- Rs."><br><br>
					</div>
					<br>
					<div class="form-group">
					    <label>Matter:</label><br><input type="text" id="textF" name="matter" class="form-control"><br/><br>
					</div>
					<br>
					
					<div class="form-group">
						<label>Request date:</label><br><input type="date" id="textF" name="date" class="form-control" placeholder=" yyyy:mm:dd"><br><br>				
					</div>
					<br>

					    
					
					<div>
					<button type="submit" class="btn btn-success" name="submit">Send Request</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>


</div>


EOT;

echo $form;


}

?>

<!-- End of the Forms -->

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