<?php 

error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if(!$cname){
header('Location: ./login');}

include('./login/admin.php');?>
<style>

.tbl
{
margin-left:200px;   
margin-right:200px;

}
.text
{
margin-left:30px;
font-size:12px;
font-family:helvetica;
}
.text1
{
background-color:yellow;
margin-left:30px; 
font-size:13px; 
font-family:helvetica;
}
.text2
{

margin-left:40px;
font-size:13px; 
font-family:helvetica;
}
.text3
{

margin-left:40px;
font-size:11px; 
font-family:helvetica;
}


</style>
<html>
<title>Admin Page</title>
<body>


<table border="1" width="968px" class="tbl">
<tr>
<td><img src="../inc/LOGO.png"/></td>
<td align="middle" class="text">Admin Login (<a href="./login/logout.php">Logout</a>)</td>
</tr>
</table>
<table border="1" width="968px" class="tbl">
<tr>
<td>&nbsp</td>

</tr>
</table>


<table border="1" width="968px" class="tbl">
<tr>
<td width="200px"></td>
<td>
<span class="text1"><a href="info.php">Page info</a></span> &nbsp <span class="text1"><a href="category.php">Category</a></span>
</td>
</tr>
<tr>
<td><br/><span class="text1">>> <a href="info.php?value=add">Add Page</a></span>
<br/><br/><span class="text1">>> <a href="info.php?value=browse">Browse Pages</a></span>
<br/><br/><span class="text1">>> <a href="info.php?value=del">Delete Pages</a></span><br/><br/>
<td>

<?php 
error_reporting(0);
$val=$_GET['value'];
if($val)
{
if($val=='add')
{echo '<div class="text2">';
include('add.php');
echo '</div><br>';
}
else
if($val=='del')
{
include('delete.php');
}
else
if($val=='browse')
{echo '<br/><div>';
include('browse.php');
echo '</div><br>';
}
else 
header('Location: info.php');
}
else  
echo '<div class="text2"><br><b>I</b>nfo Section Helps you manage the Existing Pages in Vidcol<br/><br/><b>Add Page</b></br>here you can add more pages to the vidcol directory<br/><br/><b>Browse Pages</b><br>You could Browse over the existing pages in the directory<br/><br/><b>Delete Pages</b><br>You could delete the existing pages in the library<br/><br/></div>';


 ?>
 
</td>
</tr>
</table>
</div>
</body>
</html>
