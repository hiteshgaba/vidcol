<?php
error_reporting(0);
session_start();

$vidname=$_GET['name'];
$comment=$_POST['content'];
if($comment)
{ 	
	include("config.php");
	$uname = $_SESSION['username'];
	$queryupdt=mysql_query("INSERT into usercomment VALUES('','$vidname','$uname','$comment')");
	
}
					
				

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
		
		
include("config.php");	 $query = mysql_query("SELECT * FROM $category,userlike WHERE $category.name='$vidname' AND userlike.name='$vidname' AND          	userlike.username='$myname'   ");
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
		$querupdt=mysql_query("INSERT into userlike VALUES('$id','$vid','$myname','1')");
		$urrev=1;
		
		 
		}
		if($choice=='dislike')
		{ 
		$dd=$d+1;
		$querychange=mysql_query("UPDATE $category SET dislike=$dd WHERE id='$id'");
		$querupdt=mysql_query("INSERT into userlike VALUES('$id','$vid','$myname','0')");
		$urrev=2;
	  }
}
	}
	
	}}
	
?>
