<?php


error_reporting(E_ALL ^ E_NOTICE);
session_start();
$username = $_SESSION['username'];

?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>VidCol : Forgot Password</title>
</head>
<body>
    <?php
	if (!$username){
		
		if ($_POST['resetbtn']){
				
			// get the form data
			$user = $_POST['user'];
			$email = $_POST['email'];

			// make sure info provided
			if($user){
				if($email){
			        	if((strlen($email)>7) && (strstr($email,"@"))&&(strstr($email,".")) ){
					//connect
					require("../config.php");

					$query = mysql_query("SELECT * FROM users WHERE username='$user'");
					$numrows = mysql_num_rows($query);

					if($numrows == 1){
						//get info about the account
						$row = mysql_fetch_assoc($query);
						$dbemail = $row['email'];
						
  						//make sure the email is correct
						if($email == $dbemail){
							//generate password
							$pass = rand();
							$pass = md5($pass);
							$pass = substr($pass,0,15);
							$password = md5($pass);
							
							//update db with new password
							mysql_query("UPDATE users SET password='$password' WHERE username='$user'");
							
							//make sure the password has changed
							$query = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$password'");
							$numrows = mysql_num_rows($query);
							if($numrows==1){
							    //create email vars
							    $webmaster = "gaba.hitesh@gmail.com";
							     $header = "From: nickfrosty <$webmaster>";
							     $subject = "Your new Password";
							     $message = "HELLO. Your password has been reset. Your new password is below.";
							     $message.= "Password: $pass\n";
							      echo $pass."<br/>";
							     if(mail($email,$subject,$message,$header)){
								    echo "Your Password has been reset.An email has been sent with your new password";
							      }
							      else
								  echo "An error has occured and your email was not sent containing your password.";
							}
							else
							    echo "An error has occured the password was not reset";
						}
						else
						    echo "You enter the wrong email address.";
	
					}	
					else
					    echo "The username was not found.";
					
					mysql_close();
					}
					else 
					    echo "Please enter a valid email address";
				    
				    
				
			        }
				else
					echo "Please enter your email";
	
			}
			else 
				echo "Please Enter your username.";
		}
		echo "<form action='./resetpass.php' method='post'>
		<table>
		<tr>
			<td>Username:</td>
			<td><input type='text' name='user'/></td>
		</tr>
		 <tr>
                        <td>Email:</td>
                        <td><input type='text' name='email'/></td>
                </tr>
		 <tr>
                        <td></td>
                        <td><input type='submit' name='resetbtn' value='Reset Password'/></td>
                </tr>
		</table>
		</form>";

	}
	else
		echo "Please logout to view this  Page.";
    ?>
</body>
</html>
