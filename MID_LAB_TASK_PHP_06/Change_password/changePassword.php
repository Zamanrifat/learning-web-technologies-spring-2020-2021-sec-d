<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form method="post" action="loginCheck.php"> 
		<fieldset>
			<legend>Login</legend>
			
				<table>
					<tr>
							<td><span>User Name</span> </td>
							<td>:<input type="text" name="username"></td>
				  </tr>
					<tr>
							<td><span>Password</span> </td>
							<td>:<input type="password" name="password"></td>
				  </tr>
				</table>	
					<hr>
				  <input type="checkbox" name="rememberMe" id=""><span>Remember Me</span><br><br>
				
						<input type="submit" name="submit" value="Submit">
						<a href="#"> Forgate password?</a>
				
		</fieldset>
	</form>
	
	<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPassword = $_POST['cPass'];
		$newPassword = $_POST['newPass'];
		$retypeNewPassword = $_POST['retypePass'];
    if($currentPassword=="" and $newPassword="" and $retypeNewPassword){
      echo"Fields can not be empty";
    }
    else{
		if($currentPassword !== $newPassword && $newPassword == $retypeNewPassword)
		{
			echo "Successfully Changed";
		}
        else
        {
            echo "Something mismatch here! Please Try Again";
        }
	  }
}
?>
</body>
</html>
