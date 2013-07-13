<?php
error_reporting(0);
session_start();

$vidname=$_GET['name'];
$comment=preg_replace('/[^a-zA-Z0-9@.]/','',$_GET['fn']);
if($comment!='undefined')
{
	 include("../config.php");
	 $queryupdt=mysql_query("INSERT into usercomment VALUES('','$vidname','$_SESSION[username]','$comment')");
	 
 }
	 $query_com = mysql_query("SELECT * FROM usercomment WHERE name='$vidname' ORDER BY id DESC");
 $num_com=mysql_num_rows($query_com);
 echo '
	<form action="">
	<table><tr><textarea id="content"  name="content" onKeyDown="limitText(this.form.content,this.form.countdown,45);" 
onKeyUp="limitText(this.form.content,this.form.countdown,45);" style="min-height:50px; min-width:350px; max-height:60px; max-width:360px;  text-color:#CCC; font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px;  border-style:solid;
 border-color:#666;
 border-width:1px;" >
</textarea></tr>

<font size="1">
<br/>
You have <input readonly type="text" disabled="disabled" name="countdown" size="3" width="10px" value="45"> characters left.</font>
<br>
<br>
<tr>
<input type="button" name="'; echo $vidname; echo '"height:"20px" width="25px"  style="font-size:11px;" align="absmiddle""  value="POST" onclick="showHint(content.value,this.name)">
</tr></table>
</form>	';
 if($num_com!=0)
 {
	 $count=0;
	 while($row_com=mysql_fetch_assoc($query_com))
	 {
		 
		 $name_com=$row_com['username'];
		 $comment=$row_com['comment'];
		 if($comment && $count<=9)
		 {
		 echo '<div style="width:380px"><span style=" font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px; color:blue"><b>'.$name_com.'</b></span> : <span style=" font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px; color:#666;">'.$comment.'</span><br></div>';
		 $count++;
		 }
		
	 }
 }
?>