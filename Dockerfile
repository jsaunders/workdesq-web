FROM tutum/apache-php:latest
MAINTAINER Jordan Saunders <jordan@jsaundersdev.com>

# Install packages
RUN apt-get update && \
  apt-get -yq install mysql-client php5-mcrypt git wget && \
  rm -rf /var/lib/apt/lists/*

RUN rm -fr /app
WORKDIR /app


# Add permalink feature
RUN a2enmod rewrite
ADD wordpress.conf /etc/apache2/sites-enabled/000-default.conf


# Download latest version of Wordpress into /app



WORKDIR /
RUN echo "ServerName localhost" | sudo tee /etc/apache2/conf-available/fqdn.conf
RUN a2enconf fqdn
ADD html/ /app/

ADD wp-config.php /app/wp-config.php



# Add script to create 'wordpress' DB
ADD run-wordpress.sh /run-wordpress.sh
RUN chmod 755 /*.sh

# Modify permissions to allow plugin upload
RUN chmod -R 777 /app/wp-content

# Expose environment variables
ENV DB_HOST **LinkMe**
ENV DB_PORT **LinkMe**
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**
ENV TABLE_PREFIX wp_

EXPOSE 80
CMD ["/run-wordpress.sh"]



# Add an initial data which will be automatically loaded when creating the database for the first time
ADD initial_db.sql /initial_db.sql


RUN chown www-data:www-data /app/wp-content -R

