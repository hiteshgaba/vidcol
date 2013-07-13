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
			<?php include('php/user.php'); include('html/header_right_link.html');?>
			
			
			
			</td>
   			</tr>
    </table>
	</div>
	</td>
	</tr>
	
    <!-- Center body part start here -->
   
            
           <?php 
		   
		   //Content about product
		    include('html/about.html');
			
			//Details of the developers
		   include('html/developer.html');
		   
		   //Emails of the Developers
		   include('html/developer_mail.html'); 
		   
		   ?>
    
    
    
    
  
<!-- Footer of body part start here -->
<?php include('html/footer.html'); ?>
