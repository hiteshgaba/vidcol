<?php 

error_reporting(0); 
		session_start();
		$cname=$_SESSION['username'];
		if(!$cname){
header('Location: ./login');}
include('./login/admin.php'); ?>
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
margin-top:35px; 
font-size:13px; 
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
<td><br/><span class="text1">>> <a href="category.php?value=pop">POP</a></span>
<br/><br/><span class="text1">>> <a href="Category.php?value=rock">ROCK</a><br/><br/></span>

<td>

<?php 
error_reporting(0);
$val=$_GET['value'];
if($val)
{
if($val=='pop')
{echo '<span class="text2">POP</span>';
}
else
if($val=='rock')
{echo '<span class="text2">ROCK</span>';
}
else 
header('Location: category.php');
}
else  
echo '<span class="text2">Category of videos</span>';


 ?>
 
</td>
</tr>
</table>
</div>
</body>
</html>
