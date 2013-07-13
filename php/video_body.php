<?php include('php/likedis.php'); ?>
<title>
<?php echo $vidname; ?>
</title>
  <div  class="main_div">
  <table  align="center" width="100%" >
  <!-- Header of body start here -->
  <tr>
  <td width="100%" style="border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#f0f0f0;" >
	<div class="header">
    <table width="975" align="center">
    	<tr>
    		<td align="left" valign="middle">
 			<a href="index.php" ><img style="border:none;" src="inc/LOGO.png" /></a>
			</td>
			<td width="60%" align="left" style="background-color:#fff;">
			
			<div id="search_box">
            	
               
                
                 <?php include('html/search_form.html'); ?>
             
            </div>
			</td>
			<td width="35%"  valign="middle">
			<?php include('php/user.php'); 
				include('html/header_right_link.html')?>
			
			
			</td>
   			</tr>
    </table>
	</div>
	</td>
	</tr>
	
    <!-- Center body part start here -->
    <tr>
    <td width="100%" align="center" style="background-color:#fff;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#f0f0f0;">
			<table width="1020" align="center" style="margin-top:-3px;margin-bottom:-1px;background-color:#fff;border-left-style:solid;border-left-width:1px;border-left-color:#f0f0f0;border-right-style:solid;border-right-width:1px;border-right-color:#f0f0f0;" >
				<tr><td width="100%" align="center"  >
					
							<table width="100%">
								<tr>
								<td style="min-height:500px; height:auto;" width="75%">
									<table width="100%">
										<tr>
										<td valign="middle" align="left"><div class="video_name"><?php error_reporting(0);$name=$_GET['name']; if(!$name) die('URL not found');  echo $name;?></div></td>
										</tr>
										<tr>
										<td valign="middle" align="left"><div class="right">
           <a style="display: inline;text-decoration:none;color:#006699;font-family:Arial, Helvetica, sans-serif;font-size:11px;" href="#" onclick="dimLights();" id="dim_l"><img src="inc/icon1.png" height="16px" width="10px" alt="" align="absbottom"> Lights OFF </a> 
			<a href="#" onclick="onLights();" id="on_l" style="font-family:Arial, Helvetica, sans-serif;font-size:11px;text-decoration:none;display: none;color:#006699;"><img src="inc/icon2.png"  height="16px" width="10px" alt="" align="absbottom"> Lights ON </a>
            </div></td>
										</tr>
									</table>
									

									<div id="non-dim" >
										<!-- <script type="text/javascript" src="js/flowplayer-3.2.6.min.js"></script> -->
            
											
<?php include('php/url_check.php');?>
<div style=" color:#777;font-size:13px;font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;" >
	<div style=" padding:10px 10px 10px 10px; display:block;">
		<video id="player" src="<?php echo $path;?>" width="590" height=360></video>
	</div>
</div>
</div>


												</div>
									</div>
												<div style="width:610px;margin-left:45px; color:#777;font-size:13px;font-family:"Lucida Grande","bitstream vera sans","trebuchet ms",verdana,arial;" >
									
									
									<?php include('php/video_desc.php');?>
			</div>
									
												<div class="downbut"><button name="customers"  value="val=like&category=<?php echo $category; ?>&name=<?php echo $vname;?>" onClick="showCustomer(this.value)" class="like"></button>

<button  name="customers"  value="val=dislike&category=<?php echo $category; ?>&name=<?php echo $vname;?>" onclick="showCustomer(this.value)" class="dislike"></button>

<div id="txtHint">
<?php include('php/like_check.php');?>

<div class="num"><div class="numlike" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;" >

<?php echo $lk;?> likes,</div><div class="numdislike" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">&nbsp;<?php echo $dk;?> dislikes</div></div>
</div>
												</div>

												
												
												
										
										<br />
<span style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#666;margin-left:45px;  ">Comments</span><span style="margin-left:180px;font-size:10px;">(Maximum characters: 45)</span>
<br />
<div class="com">
<?php include('php/comment_disp.php');?>
</div>
</div>

<script type="text/javascript" src="./js/jwplayer.js"></script>	
<?php

echo '<script type="text/javascript">
jwplayer("player").setup({
autoplay:true,
plugins: {
sharing: {  }
},
modes: [
{	
	 type: "flash",
	 autoplay: true,
	 src: "./swf/player.swf",
	 config: {
	 streamer: "rtmp://'.$_SERVER['SERVER_NAME'].'/oflaDemo/vS",
	 provider: "rtmp"
}
}
]

});</script>';



?>	
<!--
<script>
	flowplayer("player",'swf/flowplayer-3.2.7.swf',
	{
    		clip:
		     {
			provider:'hddn'
		/*,	urlResolvers: 'brselect',
        		bitrates: 
			[
 		
				// use the 800 kbps item by default, the SD item, marked with sd: true
		            	{  bitrate: 800, sd: true, isDefault: true },
		 
		            	// this is the HD item, marked with hd: true
		            	{  bitrate: 1600, hd: true }
		
		        ]
		*/
    		    },
    
	       //streaming plugins configurations
	       plugins: {
	
			viral: {
            
				// load the viral videos plugin
			        url: 'swf/flowplayer.viralvideos-3.2.10.swf',
 
	    			email: {
			
						labels: {
                    			
							// change the main title shown in the plugin's email tab
                    					title: 'Share this video with email'
                				
							},
                 			
						// the server side script that handles
                				// the emailing requests from this plugin
                				//script: 'http://flowplayer.electrocode.net/viralvideos/email',
 
               					// the server side script that returns
                				// a token value used for spam protection
                				//tokenUrl: 'http://flowplayer.electrocode.net/viralvideos/index/token'
            			
					},

		            	// define a video title used in sharing
            		        share: {
                           	description: 'Cool Video',

	    		    	// disable livespaces (it's from Microsoft)
                	    	livespaces: false

            				},

				// configure the embed functions
            			embed: {
                				labels: {
                    				// change the main title shown in the UI
                    					title: 'Copy and paste following code to your page'
                					}
            					}
		
	
        				},
	
	//Dock Settings
	 dock: {
            gap: 5,
            autoHide: {
                 
                // make it hide faster
                hideDelay: 2000
            },
	    horizontal: false
        },

/*
	brselect: {
            url: "swf/flowplayer.bitrateselect-3.2.10.swf",
            
            // comment this out in production
            onStreamSwitch: function (newItem) {
               $f().getPlugin('content').setHtml("Switched to: " + newItem.streamName);
            }
        },
*/
        // here is our rtmp plugin configuration
        hddn: {
            url: "swf/flowplayer.rtmp-3.2.10.swf",
 
            // netConnectionUrl defines where the streams are found
            netConnectionUrl: 'rtmp://127.0.0.1/oflaDemo/vS'
        },

       
    }
});


</script>			

    -->
  
    
    
    
  </td>
  <td style=" min-height:500px; height:auto;"  width="25%" valign="top">
  	<div id="right_content" style="text-decoration:none">
   
        <div class="suggest">Suggestions..</div>
         <?php include('php/suggestions.php');?>
    
     </div>
  </td>
</tr>
<tr>
<td height="50">
</td>
</tr>
</table>


</td>
</tr></table>
</td>
</tr>

<!-- Footer of body part start here -->
<?php include('html/footer.html'); ?>

<div style="display: none;" class="darkenBackground" name="darkBackgroundLayer" id="darkBackgroundLayer"></div>
