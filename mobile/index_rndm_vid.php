<?php
function random_vid($catg)
{
			error_reporting(0);
        	$category=strtolower($catg);
	
        		include("config.php");

	        $query1 = mysql_query("SELECT * FROM $category");
	        $numrows1 = mysql_num_rows($query1);
	$val = rand(1,$numrows1-1);
	        
	if($numrows1!=0)
	{
		while($row=mysql_fetch_assoc($query1))
	
		{
			if($row['id']==$val)
			{  

			$likes=$row['likes'];
			$dislike=$row['dislike'];
			$tags=$row['keyword'];
			$vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$img=$row['snapshot'];
			echo '
		<table width="100%" >
		<tbody>
			<tr valign="top">
				<td style="font-size:0px" width="125">
				
				<img src="inc/vS/'.$img.'" alt="video" width="40" height="30" class="thumbnails" style="border:0;background-position:0px 0px;">
				</td>
				<td class="videoListItem" style="width:100%;font-size:13px" onclick="document.location=&#39;video.php?category='.$category.'&amp;name='.$vname.'&#39;;">
				
				<div style="text-align:left;font-size:90%" dir="ltr">
				<a href="video.php?category='.$category.'&name='.$vname.'">'.$vname.'
				</a>
				</div>
				<span style="font-size:80%;color: #006500">'.$likes.'</span><span style="font-size:80%;">likes,</span>  <span style="font-size:80%;color: #CB0000">'.$dislike.'</span><span style="font-size:80%;"> dislikes</span>
				</div>
				<div style="color:#666;font-size:80%;margin-top:0px">
				By <a style="color:blue">Vidcol</a>
				</div>
				
				</td>
			</tr>
		</tbody>
		</table>			
';
	
			}
			
		}
	} 
	
}
        ?>
