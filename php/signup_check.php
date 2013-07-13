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
				die("<div style='margin-top:20px;'><span style='margin-left:60px; width:70%; font-family:Arial, Helvetica, sans-serif; color:#F60; font-size:25px;'>Welcome to the VidCol Group Go to : </span><a href='index.php' style='text-decoration:none; width:70%; font-family:Arial, Helvetica, sans-serif; color:blue; font-size:25px;'>HOME</a></div> 
					<img style='margin-top:20px;' src='inc/knowus.png' height='300px' width='620px;'/>
					</td>
    <td style=' min-height:500px; height:auto;'  width='25%' valign='top'>
  	<div id='right_content' style='text-decoration:none'>
   
        
     	<div id='detail'><img src='inc/logo1.png' width='100%' height='250' /></div>
        
        
            
     
  </td>
</tr></table>


</td>
</tr>
<tr>
<td height='50'>
</td>
</tr>
</table></td>
</tr></table>
</td>
</tr>
<!-- Footer of body part start here -->
<tr>
<td width='100%' align='center'>
<label style=' color:#999; font-size:12px;' class=''>Copyright &copy; 2011 VidCol Team	: by <label style='color:#000;'>Hitesh Neeraj Ayush Maruti</label></label>

</td>
</tr>
</table>
<div id='footer'></div>
</div>
</body>
</html>
					
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
