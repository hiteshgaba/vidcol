<?php

error_reporting(0);
session_start();

	

	$choice=$_GET['val'];
	$category=$_GET['category'];
	$vidname=$_GET['name'];
	$lcount=$_SESSION['lcount'];
	$dcount=$_SESSION['dcount'];
	$myname=$_SESSION['username'];

	if(($choice)&&($choice=='like'||$choice=='dislike'))
	 	
		
	{	
	if(!$_SESSION['username']){
		
		$vallike=1;	
	
	}
	else{
		
		
	include("../config.php");
	 $query = mysql_query("SELECT * FROM $category,userlike WHERE $category.name='$vidname' AND userlike.name='$vidname' AND userlike.username='$myname'   ");
	 $numrows = mysql_num_rows($query);
	 
	 if($numrows!=0)
	 {
 		while($row=mysql_fetch_assoc($query))
 		{   
			$user=$row['username'];
			$rev=$row['review'];
			if($rev==1)
			{$urrev=3;}
			if($rev==0)
			{$urrev=4;}
			$id=$row['id'];
 			$l=$row['likes'];
 			$d=$row['dislike'];	
 					
		}
		
	 }
	 else
	 { $query1 = mysql_query("SELECT * FROM $category WHERE name='$vidname' ");
$numrows1 = mysql_num_rows($query1);
	 
	 if($numrows1!=0)
	 {
 		while($row=mysql_fetch_assoc($query1))
 		{   
			$id=$row['id'];
 			$l=$row['likes'];
 			$d=$row['dislike'];	
			$vid=$row['name'];
 					
		}
		
	 }
		
	if($_SESSION['lcount']==0&&$_SESSION['dcount']==0)
{	if($choice=='like')
		{
		$ll=$l+1;
		$querychange=mysql_query("UPDATE $category SET likes=$ll WHERE id='$id'");
		include('home.php?category=$category&name=$vidname');
		$querupdt=mysql_query("INSERT into userlike VALUES('$id','$vid','$myname','1')");
		$urrev=1;
		
		 
		}
		if($choice=='dislike')
		{ 
		$dd=$d+1;
		$querychange=mysql_query("UPDATE $category SET dislike=$dd WHERE id='$id'");
		include('home.php?category=$category&name=$vidname');
			$querupdt=mysql_query("INSERT into userlike VALUES('$id','$vid','$myname','0')");
			$urrev=2;
	  }
}
	}
	
	}}
	
 if($vallike==1) echo '&nbsp; <span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; "><a href="signin.php" style="text-decoration:none">SignIn</a> or <a href="register.php" style="text-decoration:none">SignUp</a></span>';
 if($urrev==1)
		{echo '&nbsp;<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You like this</span>';}
		if($urrev==2)
		{echo '&nbsp;<span style="color:#777;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You dislike this</span>';}
		if($urrev==3)
		{echo '&nbsp;<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You already liked this</span>';}
		if($urrev==4)
		{echo '&nbsp;<span style="color:#F00;font-family:Arial, Helvetica, sans-serif; font-size:11px; ">You already disliked this</span>';}
		

?>
	<?php
	error_reporting(0);
	$category=$_GET['category'];
	$name=$_GET['name'];
if(!($category&&$name))
			die('URL not Found');
	include("../config.php");
	$query = mysql_query("SELECT * FROM $category WHERE name='$name' ");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{   $tags=$row['keyword'];
			$vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$lk=$row['likes'];
			$dk=$row['dislike'];
		}
	}
	
	
?>
	
	<div class="num"><div class="numlike" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;" >

<?php echo $lk;?> likes,</div><div class="numdislike" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">&nbsp;<?php echo $dk;?> dislikes</div></div></div>
	
	
	
	
	
	
	
	
	
	


