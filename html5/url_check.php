<?php
	error_reporting(0);
	$category=$_GET['category'];
	$name=$_GET['name'];
if(!($category&&$name))
			die('URL not Found');
	include("config.php");
	$query = mysql_query("SELECT * FROM $category WHERE name='$name' ");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{   
			
			$tags=$row['keyword'];
			$vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$lk=$row['likes'];
			$dk=$row['dislike'];
		}
	}
	
	$path=$addr;
?>
