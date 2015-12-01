<!doctype html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Thilakna Tea Center</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- Custom CSS for full image slider-->
        <link href="css/full-slider.css" rel="stylesheet">
<!--tis is for alert>>>>>>>>>>>>>>>>>>http://t4t5.github.io/sweetalert/-->
<script src="css/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.css" />

 
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
					<a class="navbar-brand" href="#"><img src="images/icon1.png"></a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			
<!--start of the login navigation -->

<?php

session_start();

if(isset($_POST['submit'])){
	//$loginform="";
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$privilege=$_POST['privilege'];
	//$username = mysql_real_escape_string($_POST['username']);
	//$password = mysql_real_escape_string($_POST['password']);

	if($username&&$password){
		$connec = mysql_connect("localhost","root","") or die("Couldn't connect to the database.!");
		mysql_select_db("t_center") or die("Coudn't find database.!");

		$query = mysql_query("SELECT * FROM user WHERE username='$username'");

		$numrows = mysql_num_rows($query);

		if($numrows != 0){
			while($row=mysql_fetch_assoc($query)){
				$dbusername=$row['username'];
				$dbpassword = $row['password'];
				$dbprivilege=$row['privilege'];
			}

			if($username==$dbusername&&md5($password)==$dbpassword){
				//session_start();

				//echo "You are logged in.!";
				@$_SESSION['username'] =$username; 
				@$_SESSION['privilege'] =$privilege; 
				/*$loggedAdmin="Administrator";
				$loggedCus="Customer";*/

				if($dbprivilege=='Administrator'){

					
					echo "<script>sweetAlert('Congratulations!', 'Your are logged in successfuly.!', 'success');</script>";
					//echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";echo "";
					
				    /*echo '<script language="javascript">';
					echo 'alert("You are log in.")';
					echo '</script>';*/
					echo "<script>location.assign('admin/admin.php')</script>";
					//$loginform="mainwindow.html";
					//header("Location:mainwindow.html");
					//exit();
				}
				if($dbprivilege=='Customer'){
					echo "<script>sweetAlert('Congratulations!', 'Your are logged in successfuly.!', 'success');</script>";

					echo "";
					echo "";
					echo "";
					echo "<script>location.assign('mainwindow.php')</script>";
					//$loginform="admin.php";
					//header("Location:admin.php");
					//exit();
				}
			}else{
				echo '<script language="javascript">';
				echo 'alert("error! Your password is incorrect.")';
				echo '</script>';
				echo "<script>location.assign('index.php')</script>";
			}	
		}else{
			die("That user doesn't exsits.!");
		}

	}else{
		die("Please enter username and password"); 
	}

}else{

	$form = <<<EOT

	<ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text"><font color="green">Already have an account?</font></p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="green">Login</font></b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								<font color="green">Login via</font>
								
								 <form class="form" role="form" method="post" action="index.php">
										<div class="form-group">											 
											 <input type="text" class="form-control"  name="username" placeholder="Username" required>
										</div>
										<div class="form-group">											 
											 <input type="password" class="form-control" name="password" placeholder="Password" required>

                                             <div class="help-block text-right"><a href="#"><font color="green">Forget the password ?</font></a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-success btn-block" name="submit">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							
					 </div>
				</li>
			</ul>

        </li>
	</ul>

EOT;

echo $form;
}

?>

					
			</div>	
		</nav>
<!-- End of the navigation bar -->

<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQiFJLUWLa2IfUti0flm7fl9uZK-p9rajLgJ86xxQPtQZhdBc-czMk1b_A');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQwXq5iOzgWgK85XynP_VupcxVFrOrxF_dEjzhCiWtD-uQttqrL4g');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRuKvUI9cExkTJS3LytYXBvUFTQGoMV_vCFa6TYjAA-_LdUpOoSugAbrA');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
    <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
<!-- end of Header Carousel -->

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
					<li><a href="#"><font color="green">Index</font></a></li>
					
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

		<!-- Script to Activate the Carousel -->
	    <script>
	    $('.carousel').carousel({
	        interval: 5000 //changes the speed
	    })
	    </script>

				

	</body>
</html> 

<!--This is for when press bitton popou window

<style>

	#white-background{
		display: none;
		width: 100px;
		height: 100px;
		position: fixed;
		top: 0px;
		left: 0px;
		background-color: #fefefe;
		opacity: 0.7;
		z-index: 9999;
	}

	#dlgbox{
		/*initially dialog is hidden*/
		display: none;
		position: fixed;
		width: 480px;
		z-index: 9999;
		border-radius: 10px;
		background-color: #7c7d7e;
	}
	#dlg-header{
		background-color: #6d84b4;
		color: white;
		font-size: 20px;
		padding: 10px;
		margin: 10px 10px 10px 10px;
	}
	#dlg-body{
		background-color: white;
		color: black;
		font-size: 14px;
		padding: 10px;
		margin: 0px 10px 10px 10px;
	}
	#dlg-footer{
		background-color: #f2f2f2;
		text-align: right;
		padding: 10px;
		margin: 0px 10px 10px 10px;
	}
	#dlg-footer button{
		background-color: #6d84b4;
		color: white;
		padding: 5px;
		border: 0px;
	}


</style>





<div id="white-background"></div>
					<div id="dlgbox">
						<div id="dlg-header">You are logged in.!</div>
						<div id="dlg-body">Press ok to Continue.!</div>
						<div id="dlg-footer">
							<button onclick="dlgLogin()">Login<button>
					</div>
				</div>

	    <script>
			function dlgLogin(){
				var whitebg=document.getElementById("white-background");
				var dlg=document.getElementById("dlgbox");
				whitebg.script.display="none";
				dlg.script.display="none";
			}
			function showDialog(){
				var whitebg=document.getElementById("white-background");
				var dlg=document.getElementById("dlgbox");
				whitebg.script.display="block";
				dlg.script.display="block";

				var winwidth=window.innerWidth;
				var winheight=window.innerheight;

				dlg.style.left= (winWidth/2) - 480/2 + "px";
				dlg.style.top = "150px";
			}

		</script>
-->