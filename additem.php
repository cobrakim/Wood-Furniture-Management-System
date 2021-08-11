<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first you know";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php


// initializing variables
$item_name = "";
$item_price   = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// Add item
if (isset($_POST['add'])) {
  // receive all input values from the form
  echo "connect";
  $item_name=mysqli_real_escape_string($db, $_POST['product_name']);
  $item_price=mysqli_real_escape_string($db, $_POST['price']);
  $quant=mysqli_real_escape_string($db, $_POST['quant']);
  $contactname=mysqli_real_escape_string($db, $_POST['contactname']);
  $address=mysqli_real_escape_string($db, $_POST['address']);
  $contactnum=mysqli_real_escape_string($db, $_POST['contactnum']);
  $note=mysqli_real_escape_string($db, $_POST['note']);
  $date=mysqli_real_escape_string($db, $_POST['date']);
  
  
    $query = "INSERT INTO product (product_name,price,quantity,contactname,address,contactnum,note,date) 
  			  VALUES('$item_name','$item_price','$quant','$contactname','$address','$contactnum','$note','$date')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Yeah! You Successfully stored it B!!!');</script>";
				
    }
    else{
        echo"<script>alert('Something wrong with you dude!!!!!');</script>";
    }
  	
  	header('location: table.php');
  
}
?>
<!-->

<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form method="POST" class="form-inline" action="additem.php">
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div>
        <label for="name">Quantity</label>
        <input type="number" name="quant" id="quant" min="1" max="">
    </div>
  <button type="submit" class="btn btn-default" name="add">Add item</button>
    <div class="form-group">
    <label for="name">contact name</label>
    <input type="text" class="form-control" name="contactname">
    
	<div class="form-group">
    <label for="name">Address</label>
    <input type="text" class="form-control" name="address">
  </div>
  
  <div class="form-group">
    <label for="name">contact number</label>
    <input type="text" class="form-control" name="contactnum">
  </div>
  
  <div class="form-group">
    <label for="name">Note</label>
    <input type="text" class="form-control" name="note">
  </div>
  
  <div class="form-group">
    <label for="name">Trans</label>
    <input type="date" class="form-control" name="date">
  </div>

  </div>
</form> 

<div>
<a href="table.php">Home</a>
</div>
</body>
</html>
<!-->