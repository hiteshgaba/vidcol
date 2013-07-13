Vidcol - Video Server

web server: 

1. apache 2 : sudo apt-get install apache2

2. php 5 : sudo apt-get install php5 php5-cgi libapache2-mod-php5 php5-common php-pear

3. MySQl 5.5 : sudo apt-get install mysql-server-5.5

4. phpmyadmin : sudo apt-get install phpmyadmin 

5. Upload database file localhost.sql into phpmyadmin

6. Update $dbpasswd='vidcol@123'; in public_html/config.php and public_html/mobile/config.php 

7. Update the /etc/apache2/sites-available/default -> Line 4 and Line 9  DocumentRoot /var/www/Vidcol/public_html

8. ~]# /etc/init.d/apache2 restart

9. NFS server : 
(a) sudo apt-get install nfs-kernel-server
(b) vi /etc/exports -> /var/www/Vidcol/public_html/inc 30.0.0.0/16(rw,sync)

10. ~]# sudo /etc/init.d/nfs-kernel-server restart 

11. Mounting videos to be available for mobile website -> 
   ~]# sudo mount --bind /var/www/Vidcol/public_html/inc/vS /var/www/Vidcol/public_html/html5/inc/vS




red5 server:

1. extract red5.zip in Downloads directory

2. sudo apt-get install nfs-common 

3. sudo mount -t nfs /var/www/Vidcol/public_html/inc /home/red5/Downloads/red5/webapps/oflaDemo/streams

4. ~]# cd Downloads/red5 

5. ~]# sh red5.sh


Darwin streaming server Installation details

1. For Installation and setup of darwin streaming server --> www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CDMQFjAA&url=http%3A%2F%2Fblog.rachaelbond.com%2Fdarwin-media-server%2F&ei=Q46YUY3XGoaQrQe4ooHgAg&usg=AFQjCNHMoUr2HykKnT_0CVs7OyypL9Pf3w&sig2=o-kGl-8u3zlKkMpgc2YRfA&bvm=bv.46751780,d.bmk

2. For encoding of videos --> http://blog.rachaelbond.com/encode-mp4/

3. For ffmpeg configuration for different format conversions
http://askubuntu.com/questions/133287/how-can-i-convert-mp4-files-to-3gp-using-ffmpeg
