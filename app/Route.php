<?php

namespace App;

use App\Functions as Func;
use \Exception;

class Route{
	/**
	* The get function to prepare $_GET requests coming from [web]
	* @return void
	*/
	public function get($route_url, $route_controller, $route_method, $route_params = []){
		// if $route_url or $_GET['url'] not set
		if (!@rtrim(ltrim($_GET['url'],'/'),'/')) {
			$route_url = Func::env('APP_INDEX','welcome');
			$_GET['url'] = Func::env('APP_INDEX','welcome');
		}

		// delete $route_url value from $_GET['url']
		$url = str_replace($route_url, '', $_GET['url']);

		// parse url
		$url = self::parseUrl(ltrim($url,'/'));

		// If $route_url equals $_GET['url'] then call the controller
		if (ltrim($route_url,'/') == $_GET['url']) {

			// check if the requested controller's file not exist
			if (!file_exists('../app/Controllers/'.$route_controller.'.php')) {
				throw new Exception("Error, The controller [".$route_controller."] doesn't exist!", 1);
			}

			// create an object of the requested controller
			$controller_obj = "App\Controllers\\".$route_controller;

			// this variable for the exception if an error occured
			$route_controller_str = $route_controller;

			$route_controller = new $controller_obj;

			// check if the method doesn't exist in the requested class [controller]
			if (!method_exists($route_controller, $route_method)) {
				throw new Exception('Error, The method ['.$route_method.'] doesn\'t exist in ['.$route_controller_str.'] controller',1);
			}

			// merge route parameters with the requested parameters in [url]
			if (!empty($route_params)) {
				$route_params = array_merge($route_params, $url);
			}else{
				$route_params = $url ? array_values($url) : [];
			}

			// call function that requestd in the route
			@call_user_func_array([$route_controller, $route_method], $route_params);
		}
	}

	/**
	* This function for parsing url in array to use it's values as [controller, method, params...]
	* @return array
	*/
	public function parseUrl($getURL){
		if (isset($getURL)) {
			return $url = explode('/', filter_var(rtrim($getURL, '/'), FILTER_SANITIZE_URL));
		}
	}
}