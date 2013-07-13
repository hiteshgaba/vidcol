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
	echo("<span style='color:red'>* Username already taken</span> ");
	}
	else{
	//check for existence
		if(!$accept)
			{ echo("<span style='color:red'>Please accept our Terms and Conditions To Register</span>
  
  
  
				")
  
  
  
			;}
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
				die("<div align='center' style='margin-top:20px;'><span style='margin-left:60px; width:70%; font-family:Arial, Helvetica, sans-serif; color:#F60; font-size:25px;'>Welcome to the VidCol Group Go to : </span><a href='index.php' style='text-decoration:none; width:70%; font-family:Arial, Helvetica, sans-serif; color:blue; font-size:25px;'>HOME</a></div> 
					<img align='center' style='margin-top:20px;' src='inc/knowus.png' height='300px' width='100%'/> 
					
        
        
        
            <div id='page_footer' style='border-top:solid 1px #ccc;border-bottom:solid 1px #ccc;background-color:#d7d7d7;padding:10px'>
			<a class='home' href='signin.php' rel='external'>SignIn</a><a style='float:right;' href='signup.php' rel='external'>SignUp</a><br>
			
<a href='' rel='external' data-transition='pop'>Desktop</a><a style='float:right' href='tandp.php' rel='external' data-transition='pop'>Terms &amp; Privacy</a><br><a style='float:right' href='index.php' rel='external' data-transition='pop'>Home</a>
<a align='right' href='aboutus.php' rel='external' data-transition='pop'>Know Us</a>

</div>
<div style='background-color:#d7d7d7;font-family:Arial,Helvetica,sans-serif;font-size:14px;'>
<center>A Vidcol Product</center>
	</div>
 					");
					
				
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
