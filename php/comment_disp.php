<?php 
echo '<div span id="txtHint1">';if(!$_SESSION['username'])
{echo '<table><tr><div  style="height:50px; width:350px; background-color:#EFEFEF; font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px;  border-style:solid;
 border-color:#CCC;
 border-width:1px;" >&nbsp;<a href="signin.php" style="text-decoration:none;">Sign In</a> or<a href="signup.php" style="text-decoration:none;"> Sign Up</a> to Post Comment
</div></tr></table>';
}
else
{
	echo '
	<form action="">
	<table><tr><textarea id="content"  name="content" onKeyDown="limitText(this.form.content,this.form.countdown,45);" 
onKeyUp="limitText(this.form.content,this.form.countdown,45);" style="min-height:50px; min-width:350px; max-height:60px; max-width:360px;  text-color:#CCC; font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px;  border-style:solid;
 border-color:#666;
 border-width:1px;" >
</textarea></tr>

<font size="1"><br/>
You have <input readonly type="text" disabled="disabled" name="countdown" size="3" value="45"> characters left.</font>
<br>
<br>
<tr>
<input type="button" name="'; echo $vidname; echo '"height:"20px" width="25px"  style="font-size:11px;" align="absmiddle""  value="POST" onclick="showHint(content.value,this.name)">
</tr></table>
</form>';}
echo '<div id="txtHint2" >';
 $query_com = mysql_query("SELECT * FROM usercomment WHERE name='$vidname' ORDER BY id DESC");
 $num_com=mysql_num_rows($query_com);
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