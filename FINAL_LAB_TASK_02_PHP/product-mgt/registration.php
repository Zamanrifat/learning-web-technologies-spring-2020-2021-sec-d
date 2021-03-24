<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$product_name = $_POST['product_name'];
		$buying_price = $_POST['buying_price'];
		$selling_price = $_POST['selling_price'];
		$profit = $_POST['profit'];

		if(!empty($product_name) && !empty($buying_price) && !is_numeric($product_name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into products (product_name,buying_price,selling_price,profit) values ('$product_name','$buying_price','$selling_price','$profit')";
			mysqli_query($con, $query);

			header("Location: login.php");
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
	<title>Registration</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Registration</legend>

			Name: <input id="text" type="text" name="product_name"><br><br>
			Buying Price: <input id="text" type="number" name="buying_price"><br><br>
			Selling Price: <input id="text" type="number" name="selling_price"><br><br>
			Profit: <input id="text" type="number" name="profit"><br><br>

			<input id="button" type="submit" value="Register"><br><br>

			<a href="login.php">Login</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>