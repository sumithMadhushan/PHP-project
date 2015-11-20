<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>View Your fertilizer Requests</title>
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
					<a class="navbar-brand" href="fertilizer_req.php">View Your fertilizer Requests</a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">  <!-- style="float:right; -->
				
					<ul class="nav navbar-nav nav-tabs"><!-- ul=url --><!-- and Tabs -->
							
							<li class="active"><a href="index.php">Home</a></li>

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
								
						</ul>
                    
					</div>	
			</div>	
		</nav>
<!-- End of the navigation bar -->

<?php

require_once("includes/initialize.php");
require_once("includes/request.php");

	echo "<div class=\"row\">
		

		<div class=\"col-md-12\">
			<div class=\"panel panel-default\">
				<div class=\"panel-body\">";
				
			echo "<div class=\"container\">
					<h2>Fertilizer Requests</h2>
						            
					<table class=\"table\">
				<thead>
				
				 <tr>
					<th>Request ID</th>
					<th>Fertilizer Catagory</th>
					<th>Name of Fertilizer</th>
					<th>Quantity</th>
					<th>Requested date</th>
				</tr>
				</thead>
				<tbody>";
				$arr=Request::find_all();
				foreach ($arr as $st){
				
				echo "<tr><td>";				
				echo $st->req_id."</td>"."<td>";
				echo $st->fer_type."</td><td>";
				echo $st->name."</td><td>";
				echo $st->quantity."</td><td>";
				echo $st->date."</td><td>";

								
				$idn=$st->req_id;
				echo "<a href='edit_fer_req.php?id=$idn'><h4>Edit Request</h4></a></td><td>";
				echo "<a href='del_fer_req.php?id=$idn'><h4>Cancel Request</h4></a></td>";
				echo "<br/></tr>";
				}
				
			
			echo "</tbody>
				</table>
				</div>";
		echo "</div>
			</div>
		</div>
	</div>";
			
		

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
			<div class="col-md-5">@ Copyright phpGroupProject 2015.</div>
			<div class="col-md-7">
				<ul class="footer-nav">
					<li><a href="#">Index</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Link</a></li>
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