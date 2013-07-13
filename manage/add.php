<?php

error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if(!$cname){
header('Location: ./login');}
include('./login/admin.php');
require('config.php');
$id=$_POST['id'];
$name=$_POST['name'];
$content=$_POST['content'];
if(($name&&$content&&$id)||($name&&$content))
{
mysql_query("INSERT into pages VALUES('$id','$name','$content')");
$val=1;
}
else
$val=0;

?>
<form action="info.php?value=add" method="POST">
<table>
<tr>
<td>
<h2>ADD PAGES</h2><br/></td>
<td></td>
</tr>
<tr>
<td>&nbsp;&nbsp;ID : </td><td><input type="text" name="id"/></td><br/>
</tr>
<tr>
<td><span style="color:red">* </span>Name : </td><td><input type="text" name="name"/></td><br/>
</tr>
<tr>
<td><span style="color:red">* </span>Content : </td><td><input type="text" name="content"/></td><br/><br/>
</tr>
<tr>
<td></td><td><input type="submit" value="Submit"/></td><br/></tr>
</form>

</table>
<?php
if($val==1)
echo '<br/><span style="color:red">Page Added Succesfully</span>';
else
if($val==0)
echo '<br/><span style="color:black">Enter Necessary Details Marked with the (<span style="color:red">*</span>)</span>';

?>
