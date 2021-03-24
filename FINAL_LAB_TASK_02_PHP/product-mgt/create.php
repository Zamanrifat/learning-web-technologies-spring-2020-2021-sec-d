<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$product_name = $_POST['product_name'];
		$buyprice = $_POST['buying_price'];
		$sellprice = $_POST['selling_price'];
		$profit = $_POST['profit'];

		if(!empty($product_name) && !empty($buyprice) && !is_numeric($product_name))
		{

			//save to database
			
			$query = "insert into products (product_name,buying_price,selling_price,profit) values ('$product_name','$buyprice','$sellprice','$profit')";

			$result=mysqli_query($con, $query);
			if($result)
{
	echo "New Product Created";
}
else
{
	echo "Action Failed";
}


			header("Location: create.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Add Product</legend>

			Name: <input id="text" type="text" name="product_name"><br><br>
			Buying Price: <input id="text" type="number" name="buying_price"><br><br>
			Selling Price: <input id="text" type="number" name="selling_price"><br><br>
			Profit: <input id="text" type="number" name="profit"><br><br>

			<input id="button" type="submit" value="Save"><br><br>

			<a href="index.php">Back</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>