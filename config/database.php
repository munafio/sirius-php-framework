<?php
/*
* Eloquent database config 
*/
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Functions as Func;

// Create an object of Eloquent Capsule
$DB = new Capsule();

// set the database connection info [database driver, host...]
$DB->addConnection([
	'driver' => Func::env('DB_DRIVER','mysql'),
	'host' => Func::env('DB_HOST','127.0.0.1'),
	'port' => Func::env('DB_PORT','3306'),
	'username' => Func::env('DB_USERNAME','root'),
	'password' => Func::env('DB_PASSWORD','root'),
	'database' => Func::env('DB_DATABASE','dbname'),
	'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
	'prefix' => '',
]);
$DB->bootEloquent();