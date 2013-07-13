<html>
<body>

<?php  
error_reporting(0);
session_start();
$name  = explode(".",$_FILES["fileToUpload"]["name"]);

 
// store session data
$_SESSION['upload_name'] = $_FILES["fileToUpload"]["name"]; 

if($_SERVER['REQUEST_METHOD']=='POST') 
{
  $format = array("video/mp4" /*,"video/avi"*/ ,"video/x-flv");
  $size = 9000000000000;
  if( ($_FILES["fileToUpload"]["size"]<=$size)&& ($_FILES["fileToUpload"]["type"] == $format[0] || $_FILES["fileToUpload"]["type"] == $format[1] /*|| $_FILES["fileToUpload"]["type"] == $format[2] || stripos($_FILES["fileToUpload"]["name"],".flv")*/ ) )
	{
		
	
	
	$input_movie="";
	
	
	
	if($_FILES["fileToUpload"]["type"] == $format[0])
	{

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"dir/temp.mp4");
		$input_movie="dir/temp.mp4";
		//mp4 to flv
		//$command = "ffmpeg -i 'dir/temp.mp4' -acodec copy -vcodec copy -copyts 'dir/temp.flv'";
		//exec($command, $output, $return);

		//mp4 to 3gp
		//$command1 = "ffmpeg -i 'dir/temp.mp4' -s 128x96 -vcodec h263 -acodec libfaac -ac 1 -ar 8000 -r 25 -ab 32k -y 'dir/temp.3gp'";
		//exec($command1, $output, $return);
		$command1 = "ffmpeg -y -i dir/temp.mp4 -r 20 -s 128x96 -b 400k -acodec aac -strict experimental -ac 1 -ar 8000 -ab 24k dir/temp.3gp";
		exec($command1, $output, $return);

		$command2 = "MP4Box -hint 'dir/temp.3gp'";
		exec($command2, $output, $return);		
		
		//mp4 to webM
		 //$command = "ffmpeg -y -i 'dir/temp.mp4' -f webm -aspect 3:2 -vcodec libvpx -vf scale=480:320 -r 13 -g 120 -level 216 -profile 0 -qmax 42 -qmin 10 -rc_buf_aggressivity 0.95 -vb 480k -acodec libvorbis -ab 96000 -aq 90 -ac 2 'dir/temp.webm'";
		//exec($command, $output, $return); 
	}
	else if($_FILES["fileToUpload"]["type"] == $format[1])
	{
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"dir/temp.flv");
		$input_movie="dir/temp.flv";
		
		//flv to mp4
		$command = "ffmpeg -i 'temp.flv' 'temp.mp4'";
		exec($command, $output, $return);
	
		//flv to 3gp
		//$command1 = "ffmpeg -i 'dir/temp.flv' -s 128x96 -vcodec h263 -acodec libfaac -ac 1 -ar 8000 -r 25 -ab 32k -y 'dir/temp.3gp'";
		//exec($command1, $output, $return);
		


		//flv to webM
		//$command = "ffmpeg -y -i 'dir/temp.flv' -f webm -aspect 3:2 -vcodec libvpx -vf scale=480:320 -r 13 -g 120 -level 216 -profile 0 -qmax 42 -qmin 10 -rc_buf_aggressivity 0.95 -vb 480k -acodec libvorbis -ab 96000 -aq 90 -ac 2 'dir/temp.webm'";
		//exec($command, $output, $return);
	}
	

	
		
	//$out_image="../inc/vS/technology/".str_replace($arr,$arr1,$name[0])."\.jpg";
	
	include('thumbnail.php');
	echo "
	<label><b><u>Select a Image to Set a thumbnail</u></b></label><br/><br />
    
	";
	

	include('highlight.php');
	echo "
<tr>
<td>	<input type='submit' id='submit_done' class='input' name='submit_done' value ='Done'>
</td>
</tr>
	</form>";
	}
	
	else 
		echo "Upload Unsuccesful.Please Upload a correct format (.avi,.flv,.mp4) & the file size < 50Mib";
}

?>
</body>
</html>
