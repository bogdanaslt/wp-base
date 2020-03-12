FROM httpd:2

#RUN apt update
#RUN apt install -y libapache2-mod-fastcgi
#RUN a2enmod fastcgi

RUN mkdir /var/app

COPY httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY httpd.conf /usr/local/apache2/conf/httpd.conf

