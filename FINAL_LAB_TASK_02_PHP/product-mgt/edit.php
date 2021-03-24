<?php 
include_once('connection.php');  

if(isset($_POST['update']))
{

	$query = "UPDATE products SET product_name = '$_POST[product_name]',buying_price = '$_POST[buying_price]',selling_price = '$_POST[selling_price]',profit = '$_POST[profit]' WHERE product_name = '$_POST[product_name]'";
	$result=mysqli_query($con,$query); 

if($result)
{
	echo "Successfully record edited";
}
else
{
	echo "Failed the edition";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Edit</legend>

			Name: <input id="text" type="text" name="product_name"><br><br>
			Buying Price: <input id="text" type="number" name="buying_price"><br><br>
			Selling Price: <input id="text" type="number" name="selling_price"><br><br>
			Profit: <input id="text" type="number" name="profit"><br><br>

			<input id="button" type="submit" name="update" value="Update"><br><br>

			<a href="productlist.php">Back</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>