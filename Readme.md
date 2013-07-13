Vidcol - (Video Server)
=======================

Vidcol is a video server developed in PHP. Its a cross platform video streaming application for web clients, smartphone clients and basic mobile user. The server streams videos to various platforms supporting various different platform specific video file formats. Its developed using various open source technologies including jwplayer for video streaming on a web and html5 devices, ffmpeg for video conversion into different formats and for thumbnail generation, red5 Streaming server for enabling video streaming on flash supporting devices, darwin streaming server for streaming of videos on basic mobile devices, it enables rtsp stream for 3gp video formats for basic mobile units which do not support flash or html5 formats. Jquery mobile framework is used for devloping a UI for smartphone devices. Vidcol provides a complete video solution enabling sreaming of video on client devices, review of those videos, searching of videos, video uploading.

Requirement for Installation
----------------------------
- Ubuntu 10.04 or above
- Min 6 Gib RAM
- Min 500 Gib Space


Installation Details
--------------------

**Setting up of web server** 

- apache 2 : sudo apt-get install apache2
- php 5 : sudo apt-get install php5 php5-cgi libapache2-mod-php5 php5-common php-pear
- MySQl 5.5 : sudo apt-get install mysql-server-5.5
- phpmyadmin : sudo apt-get install phpmyadmin 
- Upload database file localhost.sql into phpmyadmin
- Update $dbpasswd='vidcol@123'; in public_html/config.php and public_html/mobile/config.php 
- Update the /etc/apache2/sites-available/default -> Line 4 and Line 9  DocumentRoot /var/www/Vidcol/public_html
- To start the web server# /etc/init.d/apache2 restart

**Setting of of NFS server**
- sudo apt-get install nfs-kernel-server
- vi /etc/exports -> /var/www/Vidcol/public_html/inc 30.0.0.0/16(rw,sync)
- To start nfs server# sudo /etc/init.d/nfs-kernel-server restart 
- Mounting videos to be available for mobile website -> 
   # sudo mount --bind /var/www/Vidcol/public_html/inc/vS /var/www/Vidcol/public_html/html5/inc/vS

**Setting up of Red5 server**

- extract red5.zip in Downloads directory
- sudo apt-get install nfs-common 
- sudo mount -t nfs /var/www/Vidcol/public_html/inc /home/red5/Downloads/red5/webapps/oflaDemo/streams
- ~]# cd Downloads/red5 
- ~]# sh red5.sh

**Darwin streaming server Installation details**

- For Installation and setup of darwin streaming server please refer - www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CDMQFjAA&url=http%3A%2F%2Fblog.rachaelbond.com%2Fdarwin-media-server%2F&ei=Q46YUY3XGoaQrQe4ooHgAg&usg=AFQjCNHMoUr2HykKnT_0CVs7OyypL9Pf3w&sig2=o-kGl-8u3zlKkMpgc2YRfA&bvm=bv.46751780,d.bmk
- For encoding of videos video please refer - http://blog.rachaelbond.com/encode-mp4/
-  For ffmpeg configuration for different format conversions please refer -
http://askubuntu.com/questions/133287/how-can-i-convert-mp4-files-to-3gp-using-ffmpeg


**Note : Video files and and the sofwares required for running the server are not included in the repository due to size constraint. For any help write to me at gaba.hitesh@gmail.com**
