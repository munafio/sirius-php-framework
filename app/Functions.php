<?php
/*
* This class contains all functions that may be
* used in this application.
*/
namespace App;

use Dotenv\Dotenv;

class Functions{

	/**
	* Env function - Environment variables
	* @return [string] - The requested environment variable value
	*/
	public function env($name, $default = null){
		$dotenv = new Dotenv(__DIR__."/..");
		$dotenv->load();
		if (isset($_ENV[$name])) {
			return $_ENV[$name];
		}else{
			return $default;
		}
	}

}