# ************************************************************************** #
#                                                                            #
#                                                        :::      ::::::::   #
#   Dockerfile                                         :+:      :+:    :+:   #
#                                                    +:+ +:+         +:+     #
#   By: rmanfred <rmanfred@21-school.ru>           +#+  +:+       +#+        #
#                                                +#+#+#+#+#+   +#+           #
#   Created: 2020/08/19 10:42:02 by rmanfred          #+#    #+#             #
#   Updated: 2020/08/19 10:42:05 by rmanfred         ###   ########.fr       #
#                                                                            #
# ************************************************************************** #

FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install php-fpm php-mysql
RUN apt-get -y install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

RUN wget http://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz 

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
RUN tar -xzf phpMyAdmin-4.9.0.1-english.tar.gz

RUN openssl req \
    -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=ru/ST=Moscow/L=Moscow/O=no/OU=no/CN=localhost"

COPY srcs/config.inc.php phpMyAdmin-4.9.0.1-english/
COPY srcs/wp-config.php wordpress/
COPY srcs/init.sql .
COPY srcs/autoindex_on .
COPY srcs/autoindex_off .
COPY srcs/start.sh .

RUN mkdir /var/www/localhost
RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*

RUN mv phpMyAdmin-4.9.0.1-english/ /var/www/localhost/phpmyadmin
RUN mv wordpress/ /var/www/localhost/wordpress

RUN service mysql start && mysql < init.sql 

ENV INDEX=1

EXPOSE 80 443

ENTRYPOINT ["bash","start.sh"]
