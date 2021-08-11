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
            <div class="sidebar-header">
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
<div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
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




 
                           
                            
                            <li class="active">
                                <a href="table.php"><i class="fa fa-table"></i>
                                    <span>Records</span></a>
                               
                            </li>
							<li>
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
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">ROMING WOOD FURNITURE</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Records</span></li>
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
            <body>
<form method="POST" class="form-inline" action="additem.php" >
  <div class="form-group" style="width:30%	; ">
    <label for="name" >Product Name</label> 
    <input type="text" style="width: 200%" class="form-control"  placeholder="Add Product Name" name="product_name" required>

    <label for="name">Price</label> 
    <input type="number" style="width: 200%" class="form-control" placeholder="Add Price" name="price" required>

        <label for="name" >Quantity</label>
        <input type="number" style="width: 200%" name="quant" id="quant" min="1" max="" required>
		<br>
		 <div class="form-group" style="width:100%	">
		<p>Customer's Information:</p>
<input type="text"  class="form-control" style="width: 400%" name="contactname" placeholder="Customer's Complete Name" required>
<input type="text"  class="form-control" style="width: 400%" name="address" placeholder="Customer's Complete Address" required>
<input type="text"  class="form-control" style="width: 400%" name="contactnum" placeholder="Customer's Number" required>
<input type="text"  class="form-control" style="width: 400%" name="note" placeholder="Notes" required>
<label for="name">Transaction Date</label>
<input type="date"  class="form-control" style="width: 400%" name="date"  required>	



		<br> <br> <br>
		 
  <button type="submit" class="btn btn-default" style="background:gray" name="add">Add item</button>
   </div></div>
</form> 

</body>


            <div class="main-content-inner">
                <div class="row">
                   
                    <!-- Contextual Classes start -->
					
                    <div class="col-lg-6 mt-5">
                        <div class="card" style="width: 200%">
                            <div class="card-body" style="width: 100%">
                                <h4 class="header-title">Products</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
													<th scope="col">Customer's Name</th>
													<th scope="col">Customer's Address</th>
													<th scope="col">Customer's Number</th>
													<th scope="col">Note</th>
													<th scope="col">Date</th>
													 <th scope="col">Action</th>
													 

                                                    
                                                </tr>
                                            </thead>
											
                                            <tbody>
			<?php 
               $conn = new mysqli("localhost","root","","inventorymanagement");
               $sql = "SELECT * FROM product";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>
                  
                   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["product_name"] ?></th>
                      <th><?php echo $row["price"]  ?></th>
                      <th><?php echo $row["quantity"]  ?></th>
					  <th><?php echo $row["contactname"]  ?></th>
					  <th><?php echo $row["address"]  ?></th>
					  <th><?php echo $row["contactnum"]  ?></th>
					  <th><?php echo $row["note"]  ?></th>
					  <th><?php echo $row["date"]  ?></th>
			
					  <th> <a href="up"Edit></a><a href="edit.php?id=<?php echo $row["product_id"] ?>">Edit</a> <a href="up"Edit></a><a href="delete.php?id=<?php echo $row["product_id"] ?>">Delete</a></th>
                    
                      
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
                        <div>


</div>   
                    </div>
                    <!-- Contextual Classes end -->
                   
        <!-- main content area end -->
      
<html>
<head>
	<title>Add Item</title>
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
