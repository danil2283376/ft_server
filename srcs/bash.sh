service nginx start
service mysql start
mysql -e "CREATE DATABASE Danya_Docker;" 
mysql -e "CREATE USER 'Senior'@'localhost' IDENTIFIED BY 'qwerty';"
mysql -e "GRANT ALL ON *.* TO 'Senior'@'localhost' IDENTIFIED BY 'qwerty' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES"
service php7.3-fpm start
bash
