<?php $catgry=array('Entertainment','Linux','Sports','Games','Technology');
	for($i=0;$i<5;$i++)
	{
	echo '<div style="float:left;font-size:90%;" class="heading"><font color="#282828">'.$catgry[$i].'</font></div><br/><hr size="1" noshade="noshade" color="#999" style="width:100%;height:1px;margin:2px 0;padding:0;color:#999;background:#999;border:none;">
            <div class="category">
            	<div class="upper_half">';
				
				random_vid($catgry[$i]);
	echo '</div></div>';
	}
?>
