<?php
include("connection.php");
error_reporting(0);

$user_id=$_GET['ui'];
$query = "DELETE FROM products WHERE user_name = 'product_name'";

$result=mysqli_query($con,$query); 

if($result)
{
	echo "Record Deleted from Database";
}
else
{
	echo "Failed to delete record from Database";
}
?>