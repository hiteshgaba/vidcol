
<html>
	<script language = 'javascript'>
	function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}    
	</script>
	
<body>

<?php  
error_reporting(0);
session_start();

$name  = explode(".",$_GET["name"]);

 
?>
			
		<p><strong><h3>Please Provide the Details Regarding the video : </h3></strong></p><hr  color= '#FAAA3c'/>

		<font color='black'><strong>Name<strong></font> : <br />
		<input type='hidden' name='format' value='<?php echo $name[1]; ?>' >
		<input type='text' class='input' name='video_name' value='<?php echo $name[0]; ?>' style='width:300px;'><br/><br/>
		<font color='#Eff' style='font-size:11px'></font>
	
		<font color='black'><strong>Keywords<strong></font> <font color='Red'>*</font> : <br />
		<input type='text' class='input' name='keywords' style='width:300px;'><br/>
		<font color='#CCC' style='font-size:11px'>(Seperate Every Keyword by ',') Atleast one keyword is needed.</font>
			<br /><br />
		Catagory : <br />
		<select name = 'select_name' style='height:30px; width:250px; font-size:17px;'>
			<option value ='entertainment'>Entertainment &nbsp; &nbsp; </option>
			<option value ='linux' >Linux &nbsp; &nbsp; </option>
			<option value = 'sports' >Sports &nbsp; &nbsp; </option>
			<option value = 'games' >Games &nbsp; &nbsp; </option>
			<option value = 'technology' >Technology &nbsp; &nbsp; </option>
		</select>  
		<br /><br />
	
	
	Description : <br /> 
	<textarea name='limitedtextarea' onKeyDown='limitText(this.form.limitedtextarea,this.form.countdown,100);' 
onKeyUp='limitText(this.form.limitedtextarea,this.form.countdown,100);' style = 'min-width:300px; min-height:60px; max-height:150px; max-width:350px;'>
</textarea><br>
<font size='1' color="#CCC">(Maximum characters: 100)<br>
You have <input readonly type='text' class='input' name='countdown' size='3' value='100'> characters left.</font>
	
	
	<br /><br />
	
	



</body>
</html>
