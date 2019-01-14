![Sirius PHP Framework!](https://i.imgur.com/YfYo09o.png)
# Sirius PHP Framework
A Very Simple PHP Framework (MVC)

## Features
* Simple structure.
* Using environment variables.
* Very basic `get` routing system without using a library.
* Powerful error handling system using `Whoops`.
* Laravel's Blade template engine usign `BladeOne`.
* Working with database using  `Eloquent ORM`.

## Installation
No need for composer to install the framework, just [download](https://github.com/munafaqeelmahdi/sirius-php-framework) the framework and getting started .

## Configuration
#### Public Directory
The index.php in `Public` directory serves as the front controller for all HTTP requests entering your application.

#### Configuration Files
All configuration files are stored in the `config` directory.

#### App Configuration
After installing Sirius framework, you should configure the `name` of the application or the `database connection info`...
So in the main files of the framework there is a file called `.env` this file contains the general app configuration as the following example :
```
APP_NAME=Sirius          // App name
APP_INDEX=welcome        // App index view [Default : welcome]
APP_DEBUG=true           // App debuging [Enalble : true, Disable : flase]

DB_DRIVER=mysql          // Database driver [Default : mysql]
DB_PORT=3306             // Database port
DB_HOST=127.0.0.1        // Database host name
DB_USERNAME=             // Database username
DB_PASSWORD=             // Database password
DB_DATABASE=             // Database name
```
if `.env` file is missing! there is a copy of the file called `.env.example` just copy it and remove `.example` from it's name.

## Getting started
#### Structure
```
Sirius                           // Framework directory
     |__app                      // App directory
     |    |__Controllers         // App controllers
     |    |__Models              // App models
     |    Functions.php          // App functions
     |    Route.php              // App route system
     |    
     |__config                   // Config directory
     |       database.php        // Database configuration [you can configure DB from `.env` file]
     |       
     |__public                   // Public directory
     |       |__css              // App css files
     |       |__js               // App javascript files
     |       -index.php           // Public index [read `Public directory` in above `Configuration`]
     |       
     |__resources                // Resources directory
     |          |__cache         // Views cache
     |          |__views         // Views directory
     |          
     |__routes                   // Routes Directory
     |       web.php             // Setting routes file
     |       
     |__vendor                   // Vendor file [contains various third-party libraries and their dependencies by composer]
     .env                        // Environment variables
     .env.example                // `.env` copy
     composer.json               // composer file
     composer.lock               // composer file
```

#### Working with Database
Sirius framework uses laravel's `Eloquent ORM` so you can read more about how to working with database using `Eloquent ORM` at Laravel [`official documentation`](https://laravel.com/docs/5.7/eloquent).

#### Working with Views
The PHP template engine that used in this framework is `Blade` using `BladeOne` which it is a standalone version of Blade Template Engine without Laravel in a single php file and without dependencies.
So to know how to working with views and `blade template` as simply you can read about it at Laravel [`official documentation`](https://laravel.com/docs/5.7/blade) or from [`BladeOne`](https://github.com/EFTEC/BladeOne) library's docs.

#### Working with Routes
The route system that used in this framework is built without any library, I built it in a simple way. Ofcourse it may has an errors, So you can use an external route library with this framework or just keep using the default `Sirius route system`.

#### Libraries that used in this framework
* [`whoops`](https://github.com/filp/whoops) is an error handler framework for PHP. Out-of-the-box, it provides a pretty error interface that helps you debug your web projects, but at heart it's a simple yet powerful stacked error handling system.
* [`EFTEC/BladeOne`](https://github.com/EFTEC/BladeOne) The standalone version Blade Template Engine without Laravel in a single php file and without dependencies.
* [`Eloquent ORM`](https://laravel.com/docs/5.7/eloquent) The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database.
* [`vlucas/phpdotenv`](https://github.com/vlucas/phpdotenv) Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.

## About the author
This simple project built by [Munaf Aqeel Mahdi](https://github.com/munafio)

#### Contact me
[Instagram](https://instagram.com/munafio) <br>
[Facebook personal page](https://facebook.com/munafio) <br>
[Twitter](https://twitter.com/munaf_aqeel_m) <br>

or at email [munafaqeelmahdi@gmail.com]

## License
[MIT](https://choosealicense.com/licenses/mit/)



