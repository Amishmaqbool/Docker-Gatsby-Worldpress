FROM wordpress:php7.4-apache



RUN apt-get update\
&& apt-get install -yy unzip\
&& apt-get install -y wget\
&& apt-get install -y default-mysql-client\
&& rm -rf /var/lib/apt/lists/*



WORKDIR /var/www

# 1/ Download wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# 2/ Make it executable
RUN chmod +x wp-cli.phar
# 3/ Move it into /usr/local/bin/wp
RUN mv wp-cli.phar /usr/local/bin/wp
# Check whether the installation worked


WORKDIR /var/www/html/wp-content/plugins/

#RUN wget https://github.com/wp-graphql/wp-graphiql/archive/refs/heads/master.zip
#RUN unzip master.zip
#RUN rm master.zip

WORKDIR /var/www/html/
#RUN wget https://downloads.wordpress.org/release/wordpress-5.9.tar.gz
#RUN tar -xf wordpress-5.9.tar.gz
#RUN ls -a

#RUN wp plugin install wp-gatsby --activate --allow-root --path=/var/www/html/
#RUN wp plugin install wp-graphql --activate --allow-root --path=/var/www/html/
#RUN wp plugin activate wp-graphiql-master --allow-root --path=/var/www/html/
COPY entrypoint.sh /var/www/html/
COPY advanced-custom-fields.zip /var/www/html/
RUN more entrypoint.sh

RUN ["chmod", "+x", "/var/www/html/entrypoint.sh"]

#USER www-data


ENTRYPOINT [ "sh", "/var/www/html/entrypoint.sh" ]