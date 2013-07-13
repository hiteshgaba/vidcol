<?php

error_reporting(0);
//session satrt and get variable
session_start();
$user = $_SESSION['username'];

//connect
include('../config.php');

$get = mysql_query("SELECT * from users WHERE username ='$user'");
while($row = mysql_fetch_assoc($get))
{

	$admin = $row['admin'];
	
}

if($admin==0)
{	die("You're not an admin!");
}

?>