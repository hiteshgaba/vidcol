<table width="100%" >
    <tr>
    <td valign="middle" align="left"><div class="video_name">VIDCOL : Featured Video</div></td>
    </tr>
	<tr>
										<td valign="middle" align="left"><div class="right">
            <a style="display: inline;text-decoration:none;color:#006699;font-family:Arial, Helvetica, sans-serif;font-size:11px;" href="#" onclick="dimLights();" id="dim_l"><img src="inc/icon1.png" height="16px" width="10px" alt="" align="absbottom"> Lights OFF </a> 
			<a href="#" onclick="onLights();" id="on_l" style="font-family:Arial, Helvetica, sans-serif;font-size:11px;text-decoration:none;display: none;color:#006699;"><img src="inc/icon2.png"  height="16px" width="10px" alt="" align="absbottom"> Lights ON </a>
            </div></td>
										</tr>
    </table>
     <div id="non-dim">
            
            
             
     <!--<script type="text/javascript" src="js/flowplayer-3.2.6.min.js"></script>-->       
<div style=" color:#777;font-size:13px;font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;" >
	<div style=" padding:10px 10px 10px 10px; display:block;">
		<div id="player"></div>
	</div>
</div>
</div>

<script type="text/javascript" src="./js/jwplayer.js"></script>	
<?php
echo '<script type="text/javascript">
	jwplayer("player").setup({
	height: 360,
	width: 590,
	plugins: {
	sharing: {  }
	},
	modes: [
		{ type: "flash",
		  src: "./swf/player.swf",
			config: {
			file: "vidcol.mp4",
			streamer: "rtmp://'.$_SERVER['SERVER_NAME'].'/oflaDemo/vS",
			provider: "rtmp"
			}
		}
		
	       ]
        });
</script>
';
?>

