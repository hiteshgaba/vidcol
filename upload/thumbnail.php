<?php

$command = "ffmpeg -y -itsoffset -5 -i '{$input_movie}' -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo1.jpg; ffmpeg -y -itsoffset -10 -i '{$input_movie}' -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo2.jpg; ffmpeg -y -itsoffset -15 -i '{$input_movie}' -vcodec mjpeg -vframes 1 -s 255x145 -an -f rawvideo dir/foo3.jpg";

exec($command, $output, $return);

?>

