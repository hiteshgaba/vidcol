<div class="video_name">Search Results...</div>
			<div id="discription">
            
            <?php
			error_reporting(0);
				$count=0;
        	$searchkey=$_POST['search'];
			
if($_POST['search'])
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
			
			if (stripos(' '.$vname,$searchkey)||stripos(' '.$key,$searchkey)||stripos(' '.$category[$i],$searchkey))
		{echo '<a href="video.php?category='.$category[$i].'&name='.$vname.'" style="text-decoration:none;" ><div class="video1">
			<div class="video_snap">
				<div class="pic_div"><img src="inc/vS/'.$img.'" height=100% width=100%  /></div>
			</div>
			<div class="video_desc" style=" color:blue;
	font-size:15px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;"><b >'.$vname.'</b><br><span style="color:#333; font-size:10px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;">'.$desc.'</span><br><span style="color:#000; font-size:12px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;"><span style="color:blue; font-size:12px; padding-top:15px; padding-left:0px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;><b>category</b></span>'.$category[$i].'</span></div>
		</div></a>';$count++;}
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
			