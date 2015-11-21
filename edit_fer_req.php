<!doctype html>
    
    
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Send a Fertilizer Requests</title>
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
					<a class="navbar-brand" href="fertilizer_req.php">Update fertilizer Request Here</a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  <!-- style="float:right; -->
				
					<ul class="nav navbar-nav nav-tabs"><!-- ul=url --><!-- and Tabs -->
							
							<li><a href="index.php">Home</a></li>

							<li class="dropdown">
		          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Requests <b class="caret"></b></a>
		          				<ul class="dropdown-menu">
		            				<li><a href="fertilizer_req.php">Fertilizer request</a></li>
		            				<li><a href="advance_payment_req.php">Advance payment request</a></li>
						            
						            <li role="separator" class="divider"></li>
						            <li><a href="view_fer_req.php">View your fertilizer requests</a></li>
									
									<li role="separator" class="divider"></li>
						            <li><a href="view_ad_req.php">View your advance requests</a></li>
									
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

<?php

require_once("includes/initialize.php");


        $r_id = $_GET['id'];
        $find_req=Request::find_by_id($r_id);
    

if(isset($_POST['submit'])){
    
	$fer_type=trim(mysql_prep($_POST['fer_type']));
	$name=trim(mysql_prep($_POST['name']));
	$quantity=trim(mysql_prep($_POST['quantity']));
	$date=trim(mysql_prep($_POST['date']));

		if(empty($errors)){
		
			$new_req=new Request();
			
			$new_req->req_id=$r_id;
			$new_req->fer_type=$fer_type;
			$new_req->name=$name;
			$new_req->quantity=$quantity;
			$new_req->date=$date;       
			
			$rslt=$new_req->update();
			
			if($rslt) {
				echo "<div class=\"container\">
						<div class=\"row\">
							<div class=\"col-md-7\">
								<div class=\"panel panel-default\">
									<div class=\"panel-body\">
										<h4>Your request has been successfully updated<h4><br>
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
	
$form = <<<EOT

<div class="container">
	<div class="row">
		

		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-body">

				<form class="navbar-form navbar-left" id="req_form" action="edit_fer_req.php?id=$r_id" method="post">
  					<div class="form-group">
                        
                        Request ID = $r_id

                        <br/><br/>
                        <select name="fer_type" id="fer_type">			
							<option name="fer_type" value="For small plants">For plants</option>
							<option name="course" value="For grown trees">For grown trees</option>
						</select>
                        
                        <br/><br/>
					    <input type="text" id="nameF" name="name" class="form-control" placeholder="Name of fertilizer: eg- T 750"
                        value="$find_req->name"><br/><br>
                        
					    <input type="text" id="textF" name="quantity" class="form-control" placeholder="Quantity in kg: eg- 150kg"
                        value="$find_req->quantity"/><br><br>
                        
					    <input type="date" id="textF" name="date" class="form-control" placeholder="Request date: yyyy:mm:dd"
                        value="$find_req->date"/><br><br>				


					    
					</div>
					<div>
					<button type="submit" class="btn btn-primary" name="submit">Send Request</button>
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