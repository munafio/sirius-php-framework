<?php

use App\Route;
use App\Functions as Func;

class Web{

	public function __construct(){
		/*
		|------------------------------------------------------------------------------------------
		| def: Route::get('Your_URL', 'Controller_Name', 'Method_Name',['Param1','Param2',...]);
		|------------------------------------------------------------------------------------------
		| 
		| You have two ways to use [method] parameters in the Route :
		| Route::get('Your_URL', 'Controller_Name', 'Method_Name',['Param1','Param2',...]);
		| This if you want to set method' parameters from route data 
		| (ex: http://example.com/Your_URL)
		| OR :
		| Route::get('Your_URL', 'Controller_Name', 'Method_Name');
		| And this is you want to set method's parameters from the url
		| (ex: http://example.com/Your_URL/Param1/Param2/...)
		| NOTICE : No problem of using the two ways to set method's params if needed!
		| 
		*/

		// This route of the main page
		Route::get('/', 'homeController', 'index', [Func::env('APP_NAME','Sirius'),'Munaf Aqeel Mahdi']);

		// Insert user info to database :[ Function already in homeController]	
		// Route::get('create/user', 'homeController', 'create',['munafio','munafaqeelmahdi@gmail.com']);
	}
}