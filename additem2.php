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
$workers_name = "";
$sal = "";


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
  $workers_name=mysqli_real_escape_string($db, $_POST['name']);
  $sal=mysqli_real_escape_string($db, $_POST['salary']);
  $salarydeduction=mysqli_real_escape_string($db, $_POST['salarydeduction']);
  $note=mysqli_real_escape_string($db, $_POST['note']);
  
  
    $query = "INSERT INTO workers (name,salary,salarydeduction,note) 
  			  VALUES('$workers_name','$sal','$salarydeduction','$note')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Yeah! You Successfully stored it B!!!');</script>";
				
    }
    else{
        echo"<script>alert('Something wrong with you dude!!!!!');</script>";
    }
  	
  	header('location: workers.php');
  
}
?>
<!-->

<!DOCTYPE html>
<html>
<head>
	<title>Save</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form method="POST" class="form-inline" action="additem2.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name">
    
  </div>
  <div class="form-group">
    <label for="name">Salary</label>
    <input type="text" class="form-control" name="salary">
  </div>
  <div>
        <label for="name">Salary Deduction</label>
        <input type="text"  class="form-control" name="salarydeduction"  >
    </div>
  <button type="submit" class="btn btn-default" name="add">Save</button>
    <div class="form-group">
    <label for="name">Note</label>
    <input type="text" class="form-control" name="note">
    
  </div>
</form> 

<div>
<a href="workers.php">Home</a>
</div>
</body>
</html>
<!-->