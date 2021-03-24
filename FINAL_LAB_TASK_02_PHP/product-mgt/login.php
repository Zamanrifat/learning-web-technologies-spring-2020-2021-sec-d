<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$product_name = $_POST['product_name'];
		$buying_price = $_POST['buying_price'];

		if(!empty($product_name) && !empty($buying_price) && !is_numeric($product_name))
		{

			//read from database
			$query = "select * from products where product_name = '$product_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$product_data = mysqli_fetch_assoc($result);
					
					if($product_data['buying_price'] === $buying_price)
					{

						$_SESSION['product_id'] = $product_data['product_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong productname or buying_price!";
		}else
		{
			echo "wrong productname or buying_price!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	


		
		<form method="post">
			<fieldset>
			<legend> LOGIN</legend>

			Product name: <input id="text" type="text" name="product_name"><br><br>
			Buying_price: <input id="text" type="number" name="buying_price"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="registration.php">Registration</a><br><br>
			</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>