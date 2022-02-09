#!/bin/bash
wp core download  --allow-root --path=/var/www/html/
wp config create --allow-root --path=/var/www/html --dbname=my_database --dbuser=user --dbhost=db --dbpass=password
wp plugin install wp-gatsby --allow-root --path=/var/www/html/
wp plugin install wp-graphql --allow-root --path=/var/www/html/
wp plugin install /var/www/html/advanced-custom-fields.zip --allow-root --path=/var/www/html/
# cd /var/www/html/wp-content/plugins/
# wget https://github.com/wp-graphql/wp-graphiql/archive/refs/heads/master.zip

# unzip master.zip
# wp plugin activate wp-graphiql-master --allow-root --path=/var/www/html/

/usr/sbin/apache2ctl -D FOREGROUND