<?php 

if(!$_SESSION['username'])
{echo '<div style="height:90px; width:90%; background-color:#EFEFEF; font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:21.5px;  border-style:solid;
 border-color:#CCC;
 border-width:1px;" >&nbsp;<a href="signin.php" style="text-decoration:none;">Sign In</a> or<a href="signup.php" style="text-decoration:none;"> Sign Up</a> to Post Comment
</div>';
}
else
{
	echo '
	<form action="">
	<table><tr><textarea id="content"  name="content" onKeyDown="limitText(this.form.content,this.form.countdown,45);" 
onKeyUp="limitText(this.form.content,this.form.countdown,45);" style="min-height:40%; min-width:40%; max-height:100%; max-width:90%;  text-color:#CCC; font-family:Arial, Helvetica, sans-serif; overflow:auto; font-size:11.5px;  border-style:solid;
 border-color:#666;
 border-width:1px;">
</textarea></tr>


<tr>
<td>You have</td>
	 <td><input readonly class="input" disabled="disabled" name="countdown" size="3"  type="text" name="username" value="45"></td>
	 <td>character left.</td><td>
<input type="button" data-inline="true"  name="'; echo $vidname; echo '"  style="font-size:11px;" align="absmiddle"  value="POST" onclick="showHint(content.value,this.name)" />
</td>
</tr>
</table>
</form>';
}
echo('<div id="txtHint1">');
 $query_com = mysql_query("SELECT * FROM usercomment WHERE name='$vidname' ORDER BY id DESC");
 
 $num_com=mysql_num_rows($query_com);
 
 if($num_com!=0)
 {
 
	 $count=0;
	 
		 echo('<h3>Previous Comments</h3><br>');
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