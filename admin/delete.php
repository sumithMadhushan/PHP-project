<!doctype html>
<html>
   
   <head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Delete Users-Thilakna Tea Center</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
   
   <body>
    <!-- start of the navigation bar -->

    <nav class="navbar navbar-inverse navbar-static-top" roll="navigation"> <!-- navigation bar -->
      <div class="container-fluid"> <!-- reserve area for css fluid-for moved to left corner -->
        <div class="navbar-header">
        <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> -->
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


      <?php

      require('../config.php');


         if(isset($_POST['delete']))
         {           
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            
            $username = $_POST['username'];
            
            $db = new mysqli('localhost','root','','t_center');
             $query = "DELETE FROM user WHERE username='$username'";
             
             if ($db->query($query) === TRUE) {
             	//echo "<script>window.open('delete.php?username=$username has been deleted','_self')</script>"; 
              echo '<script language="javascript">';
              echo 'alert("Successfully Remove user from the system.!")';
              echo '</script>';
              
             } else {
              echo '<script language="javascript">';
              echo 'alert("Erro occured while delete user.!")';
              echo '</script>';
               //echo "Error: " . $query . "<br>" . $db->error;
             }
         }
         else
         {
            ?>
            
               <!--<form method="POST" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                     
                     <tr>
                        <td width="100">Username</td>
                        <td><input name="username" type="text" id="username"></td>
                     </tr>
                     
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="delete" type="submit" id="delete" value="Delete">
                        </td>
                     </tr>
                     
                  </table>-->
                  <div class="col-md-7">
                    <div class="panel panel-default">
                      <div class="panel-body"><!--kotuwak athulata daganne me widiyata-->

                        <!--form eke code eka copy paste karnna ona. see 21st video-->
                      <form class="navbar-form navbar-left" role="search" method="POST" action="<?php $_PHP_SELF ?>">
                          <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Enter username for Remove">
                         </div>
                        <button type="submit" class="btn btn-default" id="delete" name="delete">Remove</button>
                      </form>


                      </div>
                    </div>
                  </div>
               <!--</form>-->
            <?php
         }
      ?>


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

    <script type="text/javascript" src = "../js/jquery.js"> </script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      
   </body>
</html> 



   
     