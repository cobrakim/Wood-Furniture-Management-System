<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-image: url('imgs/w1.jpg');  max-width: 100%;
  height: 50px; background-size: cover;">
  
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <div id="datetime" class="thedate"></div>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
<div id="DigitalCLOCK" class="clock" onload="showTime()"></div></li>
            <div class="sidebar-header">
 <script  src="assets/js/function.js"></script> 	
     
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            	<li>
								
                                <a href="index.php"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li>
                            
                                
                           <li>
                                <a href="gallery.php" ><i class="fa fa-table"></i>
                                    <span>Gallery</span></a>
                               
                            </li>
                            
                            <li>
                                <a href="table.php"><i class="fa fa-table"></i>
                                    <span>Records</span></a>
                               
                            </li>
							<li class="active">
                                <a href="workers.php" ><i class="fa fa-table"></i>
                                    <span>Workers</span></a>
                      
                            </li>
							
							<li>
                            <?php include('calculator.html') ?>
                           </li>
                        </ul>
                    </nav>
				   
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
            	  
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">ROMING WOOD FURNITURE</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Workers</span></li>
							
                            </ul>
                        </div>
                    </div>
					
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                           
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                               <a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
           
            
   
            <body>
<form method="POST" class="form-inline" action="additem2.php">
  <div class="form-group" style="width:30%">
    <label for="name" >Name</label>
    <input type="text" style="width: 100%" class="form-control" placeholder="Name of Worker" name="name" required>

    <label for="name">Salary</label>
    <input type="text" style="width:100%" class="form-control" placeholder="Salary/Day " name="salary" required>



        <label for="name">Salary Deduction</label>
        <input type="text" style="width:100%" class="form-control" placeholder="Deduction" name="salarydeduction" required>

    <label for="name">Note</label>
    <input type="text" class="form-control" style="width: 100%" name="note" placeholder="Address/Contact#/Note" required>
 <br> <br> <br>
  
  <button type="submit" class="btn btn-default" style="background:gray" name="add">Save</button>
           
   </div>
</form> 
</body>
            <div class="main-content-inner">
                <div class="row">
                   
                    <!-- Contextual Classes start -->
					
                    <div class="col-lg-6 mt-5">
                        <div class="card" style="width: 200%">
                            <div class="card-body" style="width: 100%">
                                <h4 class="header-title">Workers</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Salary</th>
                                                    <th scope="col">Salary Deduction</th>
													<th scope="col">Note</th>
													<th scope="col">Action</th>
													 

                                                    
                                                </tr>
                                            </thead>
											
                                            <tbody>
			<?php 
               $conn = new mysqli("localhost","root","","inventorymanagement");
               $sql = "SELECT * FROM workers";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>
                  
                   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["name"] ?></th>
                      <th><?php echo $row["salary"]  ?></th>
                      <th><?php echo $row["salarydeduction"]  ?></th>
					  <th><?php echo $row["note"]  ?></th>
					  
					  <th> <a href="up"Edit></a><a href="edit2.php?id=<?php echo $row["worker_id"] ?>">Edit</a> <a href="up"Edit></a><a href="delete2.php?id=<?php echo $row["worker_id"] ?>">Delete</a></th>
                    
                      
                    </tr>
            <?php
                 
                 }
               }

            ?>

                                            </tbody>
                                        </table>
           
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
                    <!-- Contextual Classes end -->
                   
        <!-- main content area end -->
      
<html>
<head>
	<title>Save</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    






    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
