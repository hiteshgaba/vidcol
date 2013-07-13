<?php 
		error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if($cname){header('Location: ../info.php'); die();}


else
{
include('login.php');
include('loginform.php');
}
?>
