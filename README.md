#project configuration

Install Web server apache 2:
sudo apt-get install apache2
sudo apache2ctl configtest
After installation done successfully please place all the files in the following directory
/var/www/html/

Install mysql:
sudo apt-get install mysql-server

Install php:
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql
and set username & password.
goto the webbrowser type 127.0.0.1/phpmyadmin
username: root
password: set password

-----------------------
The project is switched to visual studio code. So the web server switched to php server.
To scale the project and implement additional features the new classes are being developed. like datasource classes and model view classes for selecting, inserting, retriving and verifying etc the data into database. and also to validate the form from client side java script functions are being developed.

