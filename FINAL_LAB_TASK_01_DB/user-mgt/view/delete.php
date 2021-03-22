<?php
	
	$title = "Create Page";
	include('header.php');

?>

	<div id="page_title">
	    <h1>Delete Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend>Delete User</legend>
				<table>
					<tr>
						<td>ID:</td>
						<td><input type="text" name="id" value=""></td>
					</tr>
						<td>
							<input type="submit" name="submit" value="Deleted">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>


<?php include('footer.php') ?>
