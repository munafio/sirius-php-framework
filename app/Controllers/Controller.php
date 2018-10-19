<?php

namespace App\Controllers;

use \Exception;
Use eftec\bladeone\BladeOne;

class Controller{

	/**
	* Prepare views and it's data using laravel's blade template engine
	* [EFTEC/BladeOne] The standalone version Blade Template Engine without laravel
	* @return void
	*/
	public function view($view, $data = []){
		$view_inPath = str_replace(".", '/', $view);
		if (file_exists('../resources/views/'.$view_inPath.'.blade.php')) {
			$views = __DIR__.'/../../resources/views';
			$cache = __DIR__.'/../../resources/cache';
			$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);
			echo $blade->run($view,$data);
		}else{
			throw new Exception("The view [".$view."] doesn't exist!",1);
		}
	}
}