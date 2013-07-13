<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>

</head>
<body onload="dimLightbox();">


			
					

   <div style="height:900px;width:100%;background-color:#Ffffff;">
     <div id="non-dim">
        

<div style="-moz-box-shadow: 2px 2px 2px 2px #ccc;
	-webkit-box-shadow: 2px 2px 2px 2px #ccc;
	box-shadow: 2px 2px 2px 2px #ccc;
    -moz-border-radius:5px 5px 5px 5px;
	 -webkit-border-radius:5px 5px 5px 5px;
	 -border-radius:5px 5px 5px 5px;	
	width:400px;height:350px;">
<div style="height:30px">
<div style=" margin-left:60px; width:70%; font-family:Arial, Helvetica, sans-serif; color:#F60; font-size:25px; " ><br/>
VidCol Login
</div>
<div style="-moz-box-shadow: 2px 2px 2px 2px #ccc;
	-webkit-box-shadow: 2px 2px 2px 2px #ccc;
	box-shadow: 2px 2px 2px 2px #ccc; width:70%; margin-left:13%"></div> </div>
<div class="form2" style=" margin-left:60px;font-size:14px; width:300px; margin-top:50px">
<form action='index.php' name="myform" method='POST' >
<table style=" color:#667">

<tr>
	<td><label style="">Username:</label><BR><BR></td>
    <td><input class="input"  type="text" name='username' value=''><BR><BR></td>
</tr>
<tr>
	<td><label style="">Password:</label><BR><BR></td>
    <td><input class="input" type="password" name='password' value=''><BR><BR></td>
</tr>
<tr>
<td><b>CAPTCHA : </b> 
</td><td><image src="generate.php" />
</td>
</tr>
<tr>
<td>
Type the value you see:</td><td> <input type="text" size="6" name="secure">
</td>
</tr>
<tr></tr>
<tr><td><a href="resetpass.php">Forgot You Password?</a></td><td></td></tr>

<tr>
<td>
<br>
</td>
<td><input type="submit" class="input" name='submit' value="Sign In">&nbsp;&nbsp;
<input type="Reset"  class="input" value="clear"></td>
</tr>
</table>
</form>
</div>
</div>
</div>	</div>
            
        <div style="display: none;" class="darkenBackground" name="darkBackgroundLayer" id="darkBackgroundLayer"></div>

</body>
</html>

<script type="text/javascript">

var divA=document.getElementById("darkBackgroundLayer")
var divB=document.getElementById("non-dim")
function dimLightbox()
{
	divA.style.display='';
	divB.style.zIndex=99999;
	return false;

}
function onLightbox()
{	
	divA.style.display='';
	divB.style.zIndex=99999;
	return false;

}


divA.onclick=function(e){
//alert('outside')
onLightbox();
}

divB.onclick=function(e){
//alert('inside')
if (e && e.stopPropagation) //if stopPropagation method supported
e.stopPropagation()
else
event.cancelBubble=trues
}

</script>
<style type="text/css">


#non-dim {
z-index:-99999;
position:fixed;
color:#FF0000;

background:#FFFFFF;
height:350px;
width:400px;
margin:100px 100px 0px 470px;
	
	
}

.darkenBackground 
{
background-color: rgb(0, 0, 0);
opacity: 0.7; /* Safari, Opera */
-moz-opacity:0.70; /* FireFox */
filter: alpha(opacity=70); /* IE */
z-index: 20; 
height: 100%;
width: 100%;
background-repeat:repeat;
position:fixed;
top: 0px;
left: 0px;
}

</style>
