<?php
		error_reporting(0);
        	$category=$_GET['category'];
	        $name=$_GET['name'];
		if(!($category&&$name))
		die('URL not Found');
        	include("config.php");
	        $query1 = mysql_query("SELECT * FROM $category ");
	        $numrows1 = mysql_num_rows($query1);
		if($numrows1!=0)
		{
			while($row=mysql_fetch_assoc($query1))
			{
				$likes=$row['likes'];
				$dislike=$row['dislike'];
				$tags=$row['keyword'];
				$vname=$row['name'];
				$addr=$row['path'];
				$desc=$row['description'];
				$img=$row['snapshot'];
				if(!($name==$vname))
			echo '


                       
<table width="100%">
<tbody><tr valign="top">
<td style="font-size:0px" width="125">
<img src="inc/vS/'.$img.'" alt="video" width="40" height="30" class="thumbnails" style="border:0;background-position:0px 0px;">
</td>
<td class="videoListItem" style="width:100%;font-size:13px" onclick="document.location=&#39;video.php?category='.$category.'&amp;name='.$vname.'&#39;;">
<div style="font-size:90%;text-align:left;padding-bottom:1px" dir="ltr">
<a href="video.php?category='.$category.'&name='.$vname.'">'.$vname.'
</a>
</div>
<div style="color:#333;font-size:80%">
<span style="color: #006500">'.$likes.'</span> likes, <span style="color: #CB0000">'.$dislike.'</span> dislikes
</div>
<div style="color:#333;font-size:80%">
by vidcol
</div>

</td>
</tr>
</tbody></table>
<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">

</div>
</div>';
		}
	}
	
	   
        ?>
