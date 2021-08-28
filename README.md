# docker-laravel-mysql-nginx-starter

Create a Laravel, MySQL, Nginx Environment with Docker.

## Steps to prepare development environment

- Install Composer on your local (https://getcomposer.org/)
- Create .env file on src folder for laravel environment from .env.example
- Run command ```docker-compose build``` on your terminal
- Run command ```docker-compose up -d``` on your terminal
- Run command ```composer install``` on src folder
- Run command ```docker exec -it php /bin/sh``` on your terminal
- Run command ```chmod -R 777 storage``` on your terminal after went into php container on docker
- If app:key still empty on .env run ```php artisan key:generate``` on your terminal after went into php container on docker
- To run artisan command like migrate, etc. go to php container using ```docker exec -it php /bin/sh```
- Go to http://localhost:8001 or any port you set to open laravel

## Preview

![preview-docker-laravel](https://user-images.githubusercontent.com/49280352/131224609-401fcd2b-a815-49f2-8164-b6d9b77df87c.gif)
