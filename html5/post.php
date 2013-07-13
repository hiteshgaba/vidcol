<?php
error_reporting(0);
session_start();
$vidname=$_GET['name'];
$comment=preg_replace('/[^a-zA-Z0-9@.]/','',$_GET['fn']);

if($comment!='undefined')
{
	 include("config.php");
	 $queryupdt=mysql_query("INSERT into usercomment VALUES('','$vidname','$_SESSION[username]','$comment')");
 }
	 $query_com = mysql_query("SELECT * FROM usercomment WHERE name='$vidname' ORDER BY id DESC");
 $num_com=mysql_num_rows($query_com);
 ;
 if($num_com!=0)
 {
	 $count=0;
	 while($row_com=mysql_fetch_assoc($query_com))
	 {
		 
		 $name_com=$row_com['username'];
		 $comment=$row_com['comment'];
		 if($comment && $count<=9)
		 {
		 echo '<div style="text-align:left;width:80%;font-family:helvetica;color:blue;margin-top:10px;">'.$name_com.': <span style=" font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px; color:#666;">'.$comment.'</span><br></div>';
		 $count++;
		 }
		
	 }
 }
?>