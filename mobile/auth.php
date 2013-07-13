<?php
error_reporting(0);
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['value']=0;
if($username && $password)
{
	include("config.php");
	$query = mysql_query("SELECT * FROM users  WHERE  username='$username' ");
	$numrows = mysql_num_rows($query);

	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{   
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}
	
		//check to see if they match
	if($username==$dbusername && md5($password)==$dbpassword)
	{
		$_SESSION['username']=$username;
		$_SESSION['value']=1;
		$_SESSION['lcount']=0;
		$_SESSION['dcount']=0;
	
		$dcount=0;
		header('Location: index.php');
	
	}
	else
		echo "Incorrect Password !";
	
}
else 
	die("That user doesn't exist!");
}	
?>
