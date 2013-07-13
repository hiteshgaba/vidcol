<?php $catgry=array('Entertainment','Linux','Sports','Games','Technology');
	for($i=0;$i<5;$i++)
	{
	echo '<div style="float:left;" class="heading"><font color="#282828">'.$catgry[$i].'</font></div>
            <center><div class="category">
            	<div class="upper_half">';
				
				random_vid($catgry[$i]);
	echo '</div></div></center>';
	}
?>
