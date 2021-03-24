<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$product_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product-mgt</title>
</head>
<body>
	<fieldset>
		<legend>Index</legend>

<center>
<h1> Hello, <?php echo $product_data['product_name']; ?></h1>

	<br>
	<a href="create.php">Add New Product |</a>
	<a href="productlist.php">View Product List |</a>
	<a href="logout.php">Logout</a>


	</center>
</fieldset>	
<br>
<center>Copyright@2021</center>
		
</body>
</html>