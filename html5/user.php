
<?php 
			session_start();
			error_reporting(0); 
			$cname=$_SESSION['username'];
			if($cname){ echo ' <div class="left_link"><a class="home"  href="index.php" rel="external">';echo $cname; echo'</a>
		
             <a style="float:right"  href="logout.php" rel="external">Logout</a></div>';}
			else echo '<div class="left_link">
			<a class="home" href="signin.php" rel="external">SignIn</a><a style="float:right;" href="signup.php" rel="external">SignUp</a>
			</div>'
			?>