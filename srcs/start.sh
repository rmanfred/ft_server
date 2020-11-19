if [ "$INDEX" = "1" ];
then
	cp autoindex_on /etc/nginx/sites-available/;
	ln -s /etc/nginx/sites-available/autoindex_on /etc/nginx/sites-enabled/;
elif [ "$INDEX" = "0" ];
then
	cp autoindex_off /etc/nginx/sites-available/;
	ln -s /etc/nginx/sites-available/autoindex_off /etc/nginx/sites-enabled/;
fi;

rm /etc/nginx/sites-enabled/default

service nginx start 
service mysql start
service php7.3-fpm start

bash
