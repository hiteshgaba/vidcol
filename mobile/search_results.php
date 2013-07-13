	<style>
	#page_footer a{
	font-family:calibri;
	color:#999;
	font-size:20px;
	}
	#search{
border-left:solid 1px #999;
}
#searchbar{
display:none;
}
	</style>
<div class="video_name" style="font-size:80%;">Search Results...</div>
			<div id="discription">
            
            <?php
			error_reporting(0);
				$count=0;
        	$searchkey=$_GET['q'];
			
if($_GET['q'])
{
	    include("config.php");
	        $category=array('entertainment','games','linux','sports','technology');
		   for($i=0;$i<5;$i++)
		    {
				$query = mysql_query("SELECT * FROM $category[$i] ");
	        $numrows = mysql_num_rows($query);
	
	if($numrows !=0)
	{
		while($row=mysql_fetch_assoc($query))
		{   $vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$img=$row['snapshot'];
			$key=$row['keyword'];
			$likes=$row['likes'];
			$dislike=$row['dislike'];
			
			if (stripos(' '.$vname,$searchkey)||stripos(' '.$key,$searchkey)||stripos(' '.$category[$i],$searchkey))
		{echo '
<table width="100%">
		<tbody>
			<tr valign="top">
				<td style="font-size:0px" width="125">
				
				<img src="inc/vS/'.$img.'" alt="video" width="40" height="30" class="thumbnails" style="border:0;background-position:0px 0px;">
				</td>
				<td class="videoListItem" style="width:100%;font-size:90%" onclick="document.location=&#39;video.php?category='.$category[$i].'&amp;name='.$vname.'&#39;;">
				
				<div style="text-align:left;padding-bottom:1px;font-size:90%" dir="ltr">
				<a rel="external" href="video.php?category='.$category[$i].'&name='.$vname.'">'.$vname.'
				</a>
				</div>
				<span style="font-size:80%;color: #006500">'.$likes.'</span> <span style="font-size:80%;">likes,</span> <span style="font-size:80%;color: #CB0000">'.$dislike.'</span> <span style="font-size:80%;">dislikes</span>
				</div>
				<div style="color:#666;font-size:80%;">
				By <a style="font-size:80%;color:blue;">Vidcol</a>
				</div>
				
				</td>
			</tr>
		</tbody>
		</table>
		
		<hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
';
$count++;
	
}
	else
	continue;
		}
		
	}
			}
			

		}
	
if($count==0)
echo '<br><h3 style="margin-left:20px;">&nbsp;No record found</h3>';

echo '';      
	echo '';
?>
            
          
            </div>
			
