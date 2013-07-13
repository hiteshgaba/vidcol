<?php include('php/likedislike_val.php'); ?> 
  <div class="main_div" >
  <table align="center" width="100%" >
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
			<?php include('php/user.php'); include('html/header_right_link.html');?>
			
			
			
			
			
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

<tr><td width="100%" align="center"   >
<table width="100%" align="center"    >
<tr>
<td width="100%" align="left"  >

<table width="100%">
<tr>
  <td style="min-height:500px; height:auto;" width="75%">
  	
    <?php include('php/default_vid.php');
		include('php/index_rndm_vid.php');	
	?>

            
            
            </div>
    <div class="hrline1"></div>
	<?php 
	 //Different Categories videos dislpayed on the index.php page
	 include('php/index_catgry.php');
	?>
	 
                	
            		
  
                 	
                
    </div>
    
    
    
    
  </td>
  <td style=" min-height:500px; height:auto;"  width="25%" valign="top">
  	<div id="right_content" style="text-decoration:none">
   
        <div class="signup">
		<?php 
		
		//to show the changed signup image depending on the user logged in or not
		include('php/index_sign_img.php');
		
		?>
     
     	<div id="detail">
		<img src="inc/logo1.png" width="100%" height="250" /></div>
        <div class="hidden"></div>
        
        <div class="head_right"><img src="inc/top.png" width="90%" height="31px" /></div>
        <div class="detail1" style="text-decoration:none">
       
        
        <?php 
		//description of the different categories
		include('html/index_right_desc.html');
		?>    
     
  </td>
</tr></table>


</td>
</tr>
<tr>
<td height="50">
</td>
</tr>

</table></td>
</tr></table>
</td>
</tr>

<!-- Footer of body part start here -->
<?php include('html/footer.html'); ?>

<div style="display: none;" class="darkenBackground" name="darkBackgroundLayer" id="darkBackgroundLayer">
</div>
