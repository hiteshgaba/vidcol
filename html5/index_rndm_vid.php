<?php
function random_vid($catg)
{
			error_reporting(0);
        	$category=strtolower($catg);
	
        		include("config.php");

	        $query1 = mysql_query("SELECT * FROM $category");
	        $numrows1 = mysql_num_rows($query1);
	$val = rand(1,$numrows1-4);
	        
	if($numrows1!=0)
	{
		while($row=mysql_fetch_assoc($query1))
	
		{
			if($row['id']==$val ||$row['id']==$val+1||$row['id']==$val+2||$row['id']==$val+3)
			{   $tags=$row['keyword'];
			$vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$img=$row['snapshot'];
			echo '<a rel="external" href="video.php?category='.$category.'&name='.$vname.'" style="text-decoration:none"><div class="video">
 						
                    	<div class="pic_container"><div class="pic_div"><img src="inc/vS/'.$img.'" height="91px" width="168px;" /></div></div>
                        <div style="width:178px; color:blue;
	font-size:14px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:helvetica">'.$vname.'<br /><span style="color:#777; font-size:12px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;">by : vidcol</span></div>
                        
                    </div><a href="video.php?category='.$category.'&name='.$vname.'" ></a>';
			}
			
		}
	} 
	
	  }
        ?>