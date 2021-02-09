FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install nginx -y
RUN apt-get install openssl -y
RUN apt-get install wget -y
RUN apt-get install php7.3-fpm -y
RUN	apt-get install php7.3-mysql -y
RUN apt-get install mariadb-server -y

COPY /srcs/default /etc/nginx/sites-available/default

RUN wget https://wordpress.org/latest.tar.gz
RUN mv latest.tar.gz var/www/html
WORKDIR var/www/html  
RUN tar -xvzf latest.tar.gz 
RUN rm -rf latest.tar.gz
COPY /srcs/wp-config.php wordpress

#RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0-rc1/phpMyAdmin-5.1.0-rc1-all-languages.tar.gz
#RUN mv phpMyAdmin-5.1.0-rc1-all-languages.tar.gz  phpMyAdmin.tar.gz
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.4-all-languages.tar.gz phpMyAdmin.tar.gz
RUN tar -xzvf phpMyAdmin.tar.gz
RUN rm -rf phpMyAdmin.tar.gz
RUN mv phpMyAdmin-5.0.4-all-languages phpMyAdmin
#RUN mv phpMyAdmin-5.1.0-rc1-all-languages phpMyAdmin

COPY /srcs/bash.sh .

RUN openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Kazan/L=Kazan/O=21/OU=scolen/CN=localhost"

CMD bash bash.sh
