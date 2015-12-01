<!doctype html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Thilakna Tea Center</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">

<style type="text/css">

        table{
            background-color: #94FFDB;
        }
        th{
            width: 150px;
            text-align: left;
        }
</style>

    </head>

    <body>
        
<!-- start of the navigation bar -->

        <nav class="navbar navbar-inverse navbar-static-top" roll="navigation"> <!-- navigation bar -->
            <div class="container-fluid"> <!-- reserve area for css fluid-for moved to left corner -->
                <div class="navbar-header">
                <!--    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> -->
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default"><!--kotuwak athulata daganne me widiyata-->
                <div class="panel-body">
                    <h1 style="color:#008000">Search users</h1>

                    <form method="POST" action="viewUsers.php">
                        <input type="hidden"  name="submitted" value="true" />
                        <label><font color="#003300">Search Category:</font>

                            <select name="category">
                                <option value="id"><font color="#003300">View All</font></option>
                                <option value="f_name"><font color="#003300">First Name</font></option>
                                <option value="l_name"><font color="#003300">Last Name</font></option>
                                <option value="username"><font color="#003300">Username</font></option>
                            </select>
                        </label>

                        <label><font color="#003300">Search Criteria: </font><input type="text" name="criteria" /></label>
                        
                        <input type="submit" color="green"/>


                    <?php

                    if(isset($_POST['submitted'])){
                        include('../config.php');

                        $category=$_POST['category'];
                        $criteria=$_POST['criteria'];

                        $query= "SELECT * FROM user WHERE $category LIKE '%".$criteria."%'";
                        $result= mysqli_query($conn,$query) or die('Error getting data');
                     
                        $num_row=mysqli_num_rows($result);
                        echo "<br>";echo "<br>";

                        echo "$num_row records found.";
                        echo "<br>";echo "<br>";

                    echo "<table>";
                    echo "<tr> 
                            <th>User_ID</th> 
                            <th>Firstname</th> 
                            <th>Lastname</th> 
                            <th>Username</th> 
                            <th>NIC</th>
                            <th style='text-align:right'>Email</th>
                         </tr>";

                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){

                        echo "<tr><td>";
                        echo $row['id'];
                        echo "</td><td>";
                        echo $row['f_name'];
                        echo "</td><td>";
                        echo $row['l_name'];
                        echo "</td><td>";
                        echo $row['username'];
                        echo "</td><td>";
                         echo $row['nic'];
                        
                        //echo "</td><td style='text-align:right'>";
                         echo "</td><td>";
                        echo $row['email'];
                        echo "</td><tr>";
                    }


                    echo "<table>";

                    }



                    ?>

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