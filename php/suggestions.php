<?php
			error_reporting(0);
        	$category=$_GET['category'];
	        $name=$_GET['name'];
			if(!($category&&$name))
			die('URL not Found');
        	
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
			echo '<a href="video.php?category='.$category.'&name='.$vname.'"  style="text-decoration:none"><div class="video1">
			<div class="video_snap">
				<div class="pic_div"><img src="inc/vS/'.$img.'" height=100% width=100%  /></div>
			</div>
			<div class="video_desc" style=" color:blue;
	font-size:12.5px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;">'.$vname.'<br><span style="color:#333; font-size:12px; padding-top:5px; padding-left:2px; padding-right:4px;
	
    font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;">by : vidcol</span></div>
		</div></a>';
		}
	}
	
	   
        ?>
