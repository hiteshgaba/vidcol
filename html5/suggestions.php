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
		{   $tags=$row['keyword'];
			$vname=$row['name'];
			$addr=$row['path'];
			$desc=$row['description'];
			$img=$row['snapshot'];
			if(!($name==$vname))
			echo '<div style=""><a style="" rel="external" href="video.php?category='.$category.'&name='.$vname.'" style="text-decoration:none"><div class="video">
 						
                    	<div class="pic_container"><div class="pic_div"><img src="inc/vS/'.$img.'" height="91px" width="168px;" /></div></div>
                        <div style="width:178px; color:blue;
	font-size:14px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:helvetica">'.$vname.'<br /><span style="color:#777; font-size:12px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;">by : vidcol</span></div>
                        
                    </div><a href="video.php?category='.$category.'&name='.$vname.'" ></a></div>';
		}
	}
	
	   
        ?>