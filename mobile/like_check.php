<?php if($vallike==1) echo ' <span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:13px; "><a href="login.php" style="text-decoration:none;font-size:13px;">SignIn</a> to like or dislike the video</span>';
 if($urrev==1)
		{echo '<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:13px; ">You like this</span>';}
		if($urrev==2)
		{echo '<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:13px; ">You dislike this</span>';}
		if($urrev==3)
		{echo '<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:13px; ">You already liked this</span>';}
		if($urrev==4)
		{echo '<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:13px; ">You already disliked this</span>';}
?>
