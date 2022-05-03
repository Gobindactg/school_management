# Opensource School Management System

This is a internship project for [Serve Human Foundation](https://servehumanfoundation.org/) Super Club. but for latter this will be open source and anyone can contribute on it.

### Project developed and maintained by

-   [Mahbub Rashid Tonoy](https://github.com/MahbubTonoy)
-   [Gobinda Chandra Das](https://github.com/Gobindactg)

### Languages, Tools and Frameworks used to this project

-   Laravel 9
-   Node.js
-   Git

### Things should be installed before using this application

-   Apache Server (PHP v8.x+) (use XAMPP for development)
-   Composer
-   Node.js
-   Git

### Download/Clone project source code

Step 1: Start MySQL server and create a new database.</br>
Step 2: run this command `php .env.copy` then open .env file from root folder.</br>
Step 3: Find this lines and update with appropriate data</br>

```
DB_CONNECTION=mysql
DB_HOST= <Mysql Host Name, default value is 127.0.0.1>
DB_PORT=<Port number, default: 3306>
DB_DATABASE=<Mysql Database name>
DB_USERNAME=<Mysql Username, default user: root>
DB_PASSWORD=<Mysql User Password, default password is blank/empty field>
```

Step 4: Run These Commands
```
git clone https://github.com/Gobindactg/school_management.git
cd ./school_management
php .env.copy
```

Step 5: Use this terminal command to Setup The Project

```
composer install
npm i
php artisan key:generate
php artisan migrate
php artisan location:push
php artisan serve
```

## Happy Coding <3

This Documentation will be updated as per requirements
