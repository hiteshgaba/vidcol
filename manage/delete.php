
<?php


require('config.php');

error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if(!$cname){
header('Location: ./login');}
include('./login/admin.php');
$var=$_GET['id'];
if($var)
{$query1=mysql_query("DELETE FROM pages WHERE id='$var'");
header('Location: info.php?value=del');
}
$query=mysql_query("SELECT * FROM pages");
$rows=mysql_num_rows($query);
echo '<br/><table class="text2" ><tr><td><h2>DELETE PAGES</h2></td></table><table class="text2" border="0">';
if($rows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{   
		$id=$row['id'];
		$page=$row['name'];
		echo '<tr>
				<td>'.$page.'</td> <td><a href="delete.php?id='.$id.'"><img src="images/del.gif"/></a></td>
			 </tr>	
			
		';
	}
	
	
}
echo '</table><br/>';


?>

