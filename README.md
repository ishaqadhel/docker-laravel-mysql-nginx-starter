<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">Docker Laravel MySQL Nginx Starter</h3>

  <p align="center">
    Project Starter For Web Application Development with Laravel, MySQL, Nginx, and Docker.
    <br />
  </p>
</div>

<div align="center">

  <a href="">[![Contributors][contributors-shield]][contributors-url]</a>
  <a href="">[![Stargazers][stars-shield]][stars-url]</a>
  <a href="">[![Issues][issues-shield]][issues-url]</a>

</div>

<!-- ABOUT THE PROJECT -->
## Features

* [Docker](https://www.docker.com/)
* [Dockerfile with Alpine](https://hub.docker.com/_/alpine)
* [Nginx](https://www.nginx.com)
* [Laravel 9](https://laravel.com/)
* [MySQL 8](https://www.mysql.com/)
* [PHP 8](https://nodejs.org)
* [Node 16](https://nodejs.org)
* [NPM 8](https://www.npmjs.com)
* [PHP Prettier](https://github.com/prettier/plugin-php)
* [Github Action Issue Branch](https://github.com/apps/create-issue-branch)
* [Github Action Check Code Format Using Prettier](https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/actions)
* [Github Action Issue Autolink On Pull Request](https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/actions)

<!-- GETTING STARTED -->
## Getting Started

Follow the instruction below to setting up your project.

### Prerequisites

- Download and Install [Docker](https://docs.docker.com/engine/install/)

### Clone This Template For Your Project

- By Clicking Use This Template Button or You can Click [Here](https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/generate)

![image](https://user-images.githubusercontent.com/49280352/156305925-c7e3f2f2-c458-4b0b-ad1c-32fcaec50e1d.png)

<!-- USAGE EXAMPLES -->
## Usage

![preview-docker-laravel](https://user-images.githubusercontent.com/49280352/131224609-401fcd2b-a815-49f2-8164-b6d9b77df87c.gif)

- Create .env file for laravel environment from .env.example on src folder
- Run command ```docker-compose build``` on your terminal
- Run command ```docker-compose up -d``` on your terminal
- Run command ```composer install``` on your terminal after went into php container on docker
- Run command ```docker exec -it php /bin/sh``` on your terminal
- Run command ```chmod -R 777 storage``` on your terminal after went into php container on docker
- If app:key still empty on .env run ```php artisan key:generate``` on your terminal after went into php container on docker
- To run artisan command like migrate, etc. go to php container using ```docker exec -it php /bin/sh```
- Go to http://localhost:8001 or any port you set to open laravel

**Note: if you got a permission error when running docker, try running it as an admin or use sudo in linux**


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/ishaqadhel/docker-laravel-mysql-nginx-starter.svg?style=for-the-badge
[contributors-url]: https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/ishaqadhel/docker-laravel-mysql-nginx-starter.svg?style=for-the-badge
[forks-url]: https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/network/members
[stars-shield]: https://img.shields.io/github/stars/ishaqadhel/docker-laravel-mysql-nginx-starter.svg?style=for-the-badge
[stars-url]: https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/stargazers
[issues-shield]: https://img.shields.io/github/issues/ishaqadhel/docker-laravel-mysql-nginx-starter.svg?style=for-the-badge
[issues-url]: https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/issues
[license-shield]: https://img.shields.io/github/license/ishaqadhel/docker-laravel-mysql-nginx-starter.svg?style=for-the-badge
[license-url]: https://github.com/ishaqadhel/docker-laravel-mysql-nginx-starter/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
