<?php 
			session_start();
			error_reporting(0); 
			$cname=$_SESSION['username'];
			if($cname){ echo ' <div class="left_link"><a class="home"  href="index.php">';echo $cname; echo'</a>&nbsp;|&nbsp;
		
             <a class="home"  href="php/logout.php">Logout</a></div>';}
			else echo '<div class="left_link">
			<a class="home" href="signin.php">SignIn</a>&nbsp;|&nbsp;<a class="home" href="signup.php">SignUp</a>
			</div>'
			?>