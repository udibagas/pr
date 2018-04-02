FROM ubuntu:12.04

MAINTAINER Alexander Kiryukhin <alexander@kiryukhin.su>

RUN apt-get update
RUN apt-get -y upgrade

RUN DEBIAN_FRONTEND=noninteractive apt-get -y install apache2 libapache2-mod-php5 php5-mysql php5-sybase php5-gd php-pear php-apc php5-curl curl lynx-cur php5-xdebug php5-memcached memcached wget

RUN a2enmod php5
RUN a2enmod rewrite

# Update the Apaches PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/apache2/php.ini
RUN sed -i "s/display_errors = Off/display_errors = On/" /etc/php5/apache2/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php5/apache2/php.ini

# Update the CLI PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/cli/php.ini
RUN sed -i "s/display_errors = Off/display_errors = On/" /etc/php5/cli/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php5/cli/php.ini

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80

RUN echo "zend_extension=/usr/lib/php5/20090626/xdebug.so" > /etc/php5/apache2/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /etc/php5/apache2/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /etc/php5/apache2/conf.d/xdebug.ini
RUN echo "zend_extension=/usr/lib/php5/20090626/xdebug.so" > /etc/php5/cli/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /etc/php5/cli/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /etc/php5/cli/conf.d/xdebug.ini

CMD ["apache2","-DFOREGROUND"]
