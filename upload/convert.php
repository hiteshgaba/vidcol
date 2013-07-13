<?php 

//webm conversion 
//$command = "ffmpeg -y -i 'Basic.mp4' -f webm -aspect 3:2 -vcodec libvpx -vf scale=480:320 -r 13 -g 120 -level 216 -profile 0 -qmax 42 -qmin 10 -rc_buf_aggressivity 0.95 -vb 480k -acodec libvorbis -ab 96000 -aq 90 -ac 2 'Basic.webm'";


//flv to mp4
//$command = "ffmpeg -i 'Basic.flv' 'Basic1.mp4'";

//mp4 to 3gp
//$command = "ffmpeg -i 'Basic.mp4' -s 128x96 -vcodec h263 -acodec libfaac -ac 1 -ar 8000 -r 25 -ab 32k -y 'Basic.3gp'";

//mp4 to flv 
$command1 = "ffmpeg -i 'Basic.mp4' 'Basic.flv'";


//thumbnails $command = "ffmpeg -y -itsoffset -30 -i {$input_movie} -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo {$out_image}";

//$command = "ffmpeg -y -itsoffset -5 -i {$input_movie} -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo1.jpg; ffmpeg -y -itsoffset -10 -i {$input_movie} -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo2.jpg; ffmpeg -y -itsoffset -15 -i {$input_movie} -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo3.jpg";

//exec($command, $output, $return);
exec($command1, $output, $return);

?>

