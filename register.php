<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Sign in</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>
		
<!-- start of the navigation bar -->

		<nav class="navbar navbar-inverse navbar-static-top" roll="navigation"> <!-- navigation bar -->
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
							
							<li><a href="admin/admin.php"><font color="green">Home</font></a></li><!--home nav-->
                            <li><a href="admin/enter_data.php"><font color="green">Enter data</font></a></li>
							<li><a href="admin/set_advance.php"><font color="green">Pay Advance</font></a></li>
							<li><a href="admin/bill_cal.php"><font color="green">Calculate Bill</font></a></li>
                                
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

<!-- php walin db connect karanna yanne-->
<?php

include('config.php');


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){

	//varifications
	$email = $_POST['email'];
	$confirmemail=$_POST['confirmemail'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$privilage=$_POST['privilage'];
	$nic=$_POST['nic'];

	if($email==$confirmemail){
		if($password==$confirmpassword){
			//all good
			$firstname = mysql_real_escape_string($_POST['firstname']);
			$lastname = mysql_real_escape_string($_POST['lastname']);
			$username = mysql_real_escape_string($_POST['username']);
			$nic = mysql_real_escape_string($nic);
			$privilage = mysql_real_escape_string($privilage);
			$contactnumber = mysql_real_escape_string($_POST['contactnumber']);
			$email = mysql_real_escape_string($email);
			$password = mysql_real_escape_string($password);
			$contact_no=mysql_real_escape_string($_POST['contactnumber']);
			
			$password = md5($password);//this for the secure the password

			/*$sql = mysql_query("SELECT * FROM 'users' WHERE 'username'= '$username'");
			$num_rows=mysql_num_rows($sql);
			echo $num_rows;
			if($num_rows>0){
				echo "username already exist.!";
				exit();
			}*/
			//$query = mysqli_query($conn, "SELECT * FROM users WHERE username='".$username."'");

	        /*if(mysqli_num_rows($query) != 0){

	            echo "username already exists";
	        }else{
	            
	            
	        }*/
	        $sql = "INSERT INTO user (id, f_name, l_name, username, nic, password, privilege, contact_no, email) VALUES (NULL, '$firstname', '$lastname', '$username', '$nic', '$password', '$privilage', '$contact_no', '$email')";

				if ($conn->query($sql) === TRUE) {

					$queryforusercheck = mysqli_query($conn, "SELECT * FROM users WHERE previlege='".$privilage."'");
					if($queryforusercheck=="Administrator"){
						//echo "New record created successfully<br><br>";
					    //echo "You can sign in to the site by using your username and the password<br>";
						header("Location:admin/admin.php");
					    exit();
					}else{
						//echo "New record created successfully<br><br>";
					    //echo "You can sign in to the site by using your username and the password<br>";
					    header("Location:admin/admin.php");
						exit();

					}

					
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
				//mysql_query("INSERT INTO 'users' ('userid', 'firstname', 'lastname', 'username', 'email', 'password') VALUES (NULL, '$firstname', '$lastname', '$username', '$email', '$password')") or die(mysql_error());

			
		}else{
			echo "Your password is do not match.<br>";
			header("Location:register.php");
			exit();
		}
	}else{
		echo "Your email is do not match.<br>";
		header("Location:register.php");
		exit();
	}


}else{
	
$form = <<<EOT

<div class="container">
	<div class="row">
		

		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-body"><!--kotuwak athulata daganne me widiyata-->

					<!--form eke code eka copy paste karnna ona. see 21st video-->

					<div class="panel-heading">
						<h4 class="panel-title"><strong><font color="#003300">Sign In</font></strong></h4>
					</div>

				<form class="navbar-form navbar-left" id="registerForm" action="register.php" method="post">
  					<div class="form-group">
					    <input type="text" id="nameF" name="firstname" class="form-control" placeholder="First name">
					    

					    <input type="text" id="nameF" name="lastname" class="form-control" placeholder="Last name">
					   

					    <input type="text" id="textF" name="username" class="form-control" placeholder="username"><br>
					   

					    <input type="text" id="textF" name="nic" class="form-control" placeholder="NIC"><br>
					    


					    <div class="styleSelect" class="dropdown">
						  <select class="units" name="privilage">
						  	<option value="">--Select Previlege--</option>
						    <option value="Administrator">Administrator</option>
						    <option value="Customer">Customer</option>
						    
						  </select>
						</div>
					   				

					    <input type="text" id="textF" name="contactnumber" class="form-control" placeholder="Contact Number"><br>
					    
					    <input type="email" id="textF" name="email" class="form-control" placeholder="Emai address"><br>
					    <input type="email" id="textF" name="confirmemail" class="form-control" placeholder="Re-Enter Email address"><br>
					    <input type="password" id="textF" name="password" class="form-control" placeholder="Password"><br>
					    <input type="password" id="textF" name="confirmpassword" class="form-control" placeholder="Confirm Password">
					    
					</div>
					
					<button type="submit" class="btn btn-success" id="registerbtn" name="submit">Register</button>
					
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
<style type="text/css">
.panel{
	background-color: #e0f8ea;
}
</style>
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
					<li><a href="admin/admin.php"><font color="green">Index</font></a></li>
					
					<li><a href="#"><font color="green">Contact</font></a></li>
					<li><a href="#"><font color="green">About Us</font></a></li>
				</ul>	
			</div>
		</div>
	</div>
	

</footer>

<!-- End of the footer -->

		<script type="text/javascript" src = "js/jquery.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">

	function validateText(id){
		if($("#"+id).val()==null || $("#"+id).val()==""){
			//alert(id+" Validation Error.!");
			var div=$("#"+id).closest("div");
			div.addClass("has-error");
			return false;
		}else{
			var div=$("#"+id).closest("div");
			div.removeClass("has-error");
			return true;
		}
	}

	//make sure the website completly loaded.
	$(document).ready(
		function(){
			$("#registerbtn").click(
				function(){
					if(!validateText("textF")){
						return false;
					}
					if(!validateText("nameF")){
						return false;
					}
					/*if(!validateText("contactsubject")){
						return false;
					}
					if(!validateText("contactmessage")){
						return false;
					}*/
					$("form#registerForm").submit();
				});
		}


	);

</script>


	</body>

	<!-- modal menu ekak hadaggann piluwan meken

<div class="modal-fade" roll="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Sign In</h4>
			</div>

			<div class="modal-body">

			

			</div>

		</div>
	</div>


</div>
	-->
</html> 





