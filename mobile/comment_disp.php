<?php 



if(!$_SESSION['username'])
{echo '<div><a href="login.php">Sign In</a> to Post a comment.
</div>';
}

else
{

	echo '

<div style="margin-right:3px;margin-left:3px">
<p><a style="color:blue">Post a comment</a></p>
<div style="margin-left:3px;margin-right:3px">

<form name="commentForm" id="commentForm" action="'.$_SERVER['SERVER_URI'].'" method="post">
<textarea id="content"  name="content" cols="55" rows="3" style="color:#333;width:80%;margin-top:3px;background:#FFF;margin-bottom:3px"></textarea>
<br>
<input type="submit" name="action_comment" value="Post Comment" style="margin-top:2px;font-size:100%;color:black;padding:0">
&nbsp;&nbsp;
</form>
</div>
</div>


';
}
echo '<div style="margin-right:3px;padding-top:8px;padding-bottom:10px;margin-left:3px">';
 $query_com = mysql_query("SELECT * FROM usercomment WHERE name='$vidname' ORDER BY id DESC");
 
 $num_com=mysql_num_rows($query_com);
 
 if($num_com!=0)
 {
	 $count=0;
 
	 
		 echo('<h4>Previous Comments</h4>');
	 while($row_com=mysql_fetch_assoc($query_com))
	 {
		 
		 $name_com=$row_com['username'];
		 $comment=$row_com['comment'];
		 if($comment && $count<5)
		 {
		 echo '<div style="border-top:1px dashed #ADADAD;padding-top:8px">
<a style="color:blue">'.$name_com.'</a> : '.$comment.'
</div>




<div style="margin-right:3px;margin-left:3px" id="botPagination">      <div style="font-size:90%;text-align:center;margin-top:8px">
 
</div>
</div>
';
		 $count++;
		 }
		
	 }
 }
echo '<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
<div style="padding-bottom:0">';

?>
