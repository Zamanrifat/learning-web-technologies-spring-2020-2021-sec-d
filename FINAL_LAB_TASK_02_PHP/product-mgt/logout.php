<?php

session_start();

if(isset($_SESSION['product_id']))
{
	unset($_SESSION['product_id']);

}

header("Location: login.php");
die;