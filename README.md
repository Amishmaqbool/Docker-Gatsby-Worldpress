# Docker Gatsby Worldpress Boilerplate with ACF,Graphql plugin integrated within Dockers
## Project status
If you have run out of energy or time for your project, put a note at the top of the README saying that development has slowed down or stopped completely. Someone may choose to fork your project or volunteer to step in as a maintainer or owner, allowing your project to keep going. You can also make an explicit request for maintainers.

## Useful commands
Building the images: `docker-compose build`

Starting the containers: `docker-compose up -d`

Accessing the WordPress container: `docker-compose exec wordpress bash`

Accessing the gatsby container: `docker-compose exec gatsby ash`

Print out the logs of a container: `docker-compose logs -f [service_name]`

> Example (Wordpress): `docker-compose logs-f wordpress`

### Steps to install a new WordPress plugin
* Add the plugin zip file inside the wp folder
* Copy the plugin into the docker image using this command in the Dockerfile : `COPY [name_of_the_plugin].zip /var/www/html/` 
* Add the following instruction inside the entrypoint.sh file to install the plugin when the container starts: `wp plugin install /var/www/html/[name_of_the_plugin].zip --allow-root --path=/var/www/html/
`