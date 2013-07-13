<?php
error_reporting(0);
session_start();
if(!isset($_POST['secure'])) {
	$_SESSION['secure'] = rand(1000,9999);
	}
	
	else {
	
	  if($_SESSION['secure']==$_POST['secure']) {
		$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['value']=0;

if($username && $password)
{

include("../config.php");
$query = mysql_query("SELECT * FROM users  WHERE  username='$username' ");
$numrows = mysql_num_rows($query);

if($numrows!=0)
{	
	while($row=mysql_fetch_assoc($query))
	{   
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
		$dbadmin=$row['admin'];
	}
	
if($dbadmin==1){	//check to see if they match
if($username==$dbusername && md5($password)==$dbpassword)
{	$_SESSION['username']=$username;
	$_SESSION['value']=1;
	$_SESSION['lcount']=0;
	$_SESSION['dcount']=0;
	$dcount=0;
	header('Location: ../info.php');
	
	}
else
	echo "Incorrect Password !";
	
}
}

else if(!$dbadmin==1)
	die("Not a valid user");
}
else
	{ 
	}
		}
		
		else {
		echo 'Incorrect, try again.<br/>';
		$_SESSION['secure']=rand(1000,9999);
		}
	}

	

	
?>