<?php

include('config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$name=mysqli_real_escape_string($db, $_POST['product_name']);
$price=mysqli_real_escape_string($db, $_POST['price']);
$quant=mysqli_real_escape_string($db, $_POST['quantity']);
$contactname=mysqli_real_escape_string($db, $_POST['contactname']);
$address=mysqli_real_escape_string($db, $_POST['address']);
$contactnum=mysqli_real_escape_string($db, $_POST['contactnum']);
$note=mysqli_real_escape_string($db, $_POST['note']);
$date=mysqli_real_escape_string($db, $_POST['date']);

mysqli_query($db,"UPDATE product SET product_name='$name', price='$price' ,quantity='$quant', contactname='$contactname' ,address='$address' ,contactnum='$contactnum',note='$note',date='$date' WHERE product_id='$id'");

header("Location:table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM product WHERE product_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['product_id'];
$name = $row['product_name'];
$price = $row['price'];
$quant=$row['quantity'];
$contactname=$row['contactname'];
$address=$row['address'];
$contactnum=$row['contactnum'];
$note=$row['note'];
$date=$row['date'];



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



<form action="" method="post" action="edit.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>

<tr>
<td width="179"><b><font >Item Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="product_name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Price<em>*</em></font></b></td>
<td><label>
<input type="text" name="price" value="<?php echo $price ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Quantity<em>*</em></font></b></td>
<td><label>
<input type="text" name="quantity" value="<?php echo $quant;?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Contact name<em>*</em></font></b></td>
<td><label>
<input type="text" name="contactname" value="<?php echo $contactname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Contact Number<em>*</em></font></b></td>
<td><label>
<input type="text" name="contactnum" value="<?php echo $contactnum; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="address" value="<?php echo $address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Note<em>*</em></font></b></td>
<td><label>
<input type="text" name="note" value="<?php echo $note; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >transaction Date<em>*</em></font></b></td>
<td><label>
<input type="date" name="date" value="<?php echo $date; ?>" />
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
