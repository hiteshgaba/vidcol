
<?php

error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if(!$cname){
header('Location: ./login');}
include('./login/admin.php');
require('config.php');
$query=mysql_query("SELECT * FROM pages");
$rows=mysql_num_rows($query);
echo '<table class="text2" ><tr><td><h2>BROWSE PAGES</h2><br/></td></table> <table class="text2"><tr>
<tr>
<td width="20px"><b>ID</b></td>
<td width="100px"><b>NAME</b></td>
<td><b>CONTENT</b></td>
</tr>';
if($rows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{   
		$id=$row['id'];
		$page=$row['name'];
		$content=$row['content'];
		echo '
		
		<tr>
				<td >'.$id.'</td>
			<td>'.$page.'</td>
			<td>'.$content.'</td>
			</tr>	
			
		';
	}
	
	
}
echo '</table>';
?>