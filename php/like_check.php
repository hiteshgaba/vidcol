<?php if($vallike==1) echo '&nbsp; <span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; "><a href="signin.php" style="text-decoration:none">SignIn</a> or <a href="signup.php" style="text-decoration:none">SignUp</a></span>';
 if($urrev==1)
		{echo '&nbsp;<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You like this</span>';}
		if($urrev==2)
		{echo '&nbsp;<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You dislike this</span>';}
		if($urrev==3)
		{echo '&nbsp;<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You already liked this</span>';}
		if($urrev==4)
		{echo '&nbsp;<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You already disliked this</span>';}
?>