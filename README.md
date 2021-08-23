# docker-laravel-development

Create a Local Laravel Development Environment with Docker.

## Steps to prepare development environment

- Install Composer on your local
- Create mysql folder on this root repo
- Run command ```docker-compose build``` on your terminal
- Run command ```docker-compose up -d``` on your terminal
- Run command ```docker exec -it php /bin/sh``` on your terminal
- Run command ```chmod -R 777 storage``` on your terminal after went into php container on docker
- If app:key still empty on .env run ```php artisan key:generate``` on your terminal after went into php container on docker
