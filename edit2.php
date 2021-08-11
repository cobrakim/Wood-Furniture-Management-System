<?php

include('config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$name=mysqli_real_escape_string($db, $_POST['name']);
$salary=mysqli_real_escape_string($db, $_POST['salary']);
$salarydeduction=mysqli_real_escape_string($db, $_POST['salarydeduction']);
$note=mysqli_real_escape_string($db, $_POST['note']);

mysqli_query($db,"UPDATE workers SET name='$name', salary='$salary' ,salarydeduction='$salarydeduction', note='$note' WHERE worker_id='$id'");

header("Location:workers.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM workers WHERE worker_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['worker_id'];
$name = $row['name'];
$salary = $row['salary'];
$salarydeduction=$row['salarydeduction'];
$note=$row['note'];

}
else
{
echo "No results!";
}
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Item</title>
</head>
<body>



<form action="" method="post" action="edit2.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>

<tr>
<td width="179"><b><font >Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Salary<em>*</em></font></b></td>
<td><label>
<input type="text" name="salary" value="<?php echo $salary ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Salary Deduction<em>*</em></font></b></td>
<td><label>
<input type="text" name="salarydeduction" value="<?php echo $salarydeduction;?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Note<em>*</em></font></b></td>
<td><label>
<input type="text" name="note" value="<?php echo $note; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
