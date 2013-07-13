<div class="main_div">
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
			<?php 
			include('php/user.php');
			include('html/header_right_link.html');
				?>
			
			
			
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
<table width="100%" align="center"   >
<tr>
<td width="100%" align="left"  >

<table width="100%" >
<tr>
  <td style="min-height:500px; height:auto;" width="75%">

<?php include('php/signup_check.php'); ?>

<br/>
<div style=" margin-left:60px;	 font-family:Arial, Helvetica, sans-serif; color:#F60; font-size:25px; " ><br/>SignUp</div><div style="-moz-box-shadow: 2px 2px 2px 2px #ccc;
	-webkit-box-shadow: 2px 2px 2px 2px #ccc;
	box-shadow: 2px 2px 2px 2px #ccc; width:62%; margin-left:7%; margin-top:5px margin-bottom:10px"></div>
<br/>

<div  style=" margin-left:60px;font-size:14px; ">
<?php include('html/signup_form.html'); ?>
</div>
	
	
	
	
	
    
  </td>
    <td style=" min-height:500px; height:auto;"  width="25%" valign="top">
  	<div id="right_content" style="text-decoration:none">
   
        
     	<div id="detail"><img src="inc/logo1.png" width="100%" height="250" /></div>
        
        
            
     
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
