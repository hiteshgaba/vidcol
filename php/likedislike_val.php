<?php
error_reporting(0);
session_start();
					
				

	$choice=$_GET['val'];
	$category=$_GET['category'];
	$vidname=$_GET['name'];
	$lcount=$_SESSION['lcount'];
	$dcount=$_SESSION['dcount'];
	
	if(($choice)&&($choice=='like'||$choice=='dislike'))
	 	
		
	{	
	if(!$_SESSION['username']){
		
		$vallike=1;	
	}
	else{
		
		
	include("config.php");
	 $query = mysql_query("SELECT * FROM $category WHERE name='$vidname' ");
	 $numrows = mysql_num_rows($query);
	 //echo $numrows;
 		while($row=mysql_fetch_assoc($query))
 		{   
 			$id=$row['id'];
 			$l=$row['likes'];
 			$d=$row['dislike'];	
 					
		}
		

		
	if($_SESSION['lcount']==0&&$_SESSION['dcount']==0)
{	if($choice=='like')
		{
		$ll=$l+1;
		$querychange=mysql_query("UPDATE $category SET likes=$ll WHERE id='$id'");
		include('video.php?category=$category&name=$vidname');
		$_SESSION['lcount']=1;
		 
		}
		if($choice=='dislike')
		{ 
		$dd=$d+1;
		$querychange=mysql_query("UPDATE $category SET dislike=$dd WHERE id='$id'");
		include('video.php?category=$category&name=$vidname');
		$_SESSION['dcount']=1;
		  }
}
	}
	

	}

?>
