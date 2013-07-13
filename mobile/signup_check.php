	<?php

error_reporting(0);
//form data
$submit=$_POST['submit'];
$fullname=strip_tags($_POST['fullname']);
$username=strtolower(strip_tags($_POST['username']));
$email=(strip_tags($_POST['email']));
$password=strip_tags($_POST['password']);
$repeatpassword=strip_tags($_POST['repeatpassword']);
$gender=$_POST['gender'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob=date("$year-$month-$day");
$date=date("Y-m-d");
$accept=$_POST['accept'];

if($submit)
{
	
	//open database
	include("config.php");
	
	$namecheck=mysql_query("SELECT username FROM users WHERE username='$username'");
	$count=mysql_num_rows($namecheck);
	if($count!=0)
	{
	echo("<span style='color:red'>* Username already taken</span><br/><br/> ");
	}
	else{
	//check for existence
		
  		if(!($fullname&&$username&&$email&&$password&&$repeatpassword&&$gender&&$day&&$month&&$year&&$date))
		{
			echo("<span style='color:red'>* Please Complete all the details</span><br><br>");
		}
		if(!$accept)
		{ 
			echo("<span style='color:red'>* Please accept our Terms and Conditions To Register</span><br><br>");
  		}
		else{
			if($date&&$fullname&&$username&&$password&&$repeatpassword&&$email&&$gender&&$dob)
			{
			
			
				if($password==$repeatpassword)
				{
				
					//check char length of username and fullname
					if(strlen($username)>25||strlen($fullname)>25)
						{
							echo "<span style='color:red'>Max limit for username/fullname are 25 character</span>";
						}
					else
						{
						//check password length
						if(strlen($password)>25||strlen($password)<6)
							{
			  	echo "<span style='color:red'>Password must be between 6 and 25 character</span>";
							}
						else 
							{
			  	//encrypt password
				$password=md5($password);
				$repeatpassword=md5($repeatpassword);
		
			  	//register the user!
			
				$queryregister=mysql_query("INSERT into users VALUES('','$fullname','$username','$email','$password','$gender','$dob','$date')");
				echo '<span style="color:green">Your Account is successfully registered.</span><br><a href="login.php"> Sign in</a> to Vidcol to explore the world of wide range of videos from different genere.<br><br>';
					
				
							}
						}
				}	
				else 
		{echo "<span style='color:red; '>Passwords do not match</span>";}
			}
	}
	}
}
?>
