<html>
	<head>
		<style type="text/css">
			body {
				font-family:helvetica;
				
			}		
			.image_block {
				border:1px solid #ccc;
				border-radius:3px;
				padding:6px;
				width:165px;
				height:85px;
				float:left;
				margin:4px;
			
			}
			.image_block_inner {
				position:relative;
				margin-bottom:5px;
						
			}
			.checkbox {

				position:absolute;
				z-index:2;
				background:white;
				padding:1px;
				border-bottom-right-radius:3px;
				box-shadow: 1px 1px rgba(0,0,0,.2);
			
			}
		</style>
	
	</head>
	<body>
<table>
	<tr>	
	<td>	
		<div class="image_block">
			<div class="image_block_inner">	
			<div class="checkbox"><input type="radio" name="thumbnail" value="dir/foo1.jpg" checked  /></div>
<span class="image" href=""><img src="dir/foo1.jpg"  height="85" width="165"></span>
			</div>	
		</div>
	</td>
	<td>	<div class="image_block">
			<div class="image_block_inner">	
			<div class="checkbox"><input type="radio"   name="thumbnail" value="dir/foo2.jpg"/></div>
<span class="image" href=""><img src="dir/foo2.jpg"  height="85" width="165"></span> 
			</div>	
		</div>
	</td>
	<td>	<div class="image_block">
			<div class="image_block_inner">	
			<div class="checkbox"><input type="radio"  name="thumbnail" value="dir/foo3.jpg"/></div>
<span class="image" href=""><img src="dir/foo3.jpg" height="85" width="165"></span>
			</div>	
		</div>
	</td>
	</tr>		
	</body>
	
</html>
