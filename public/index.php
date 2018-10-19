<?php
/**
 * Sirius - A Very Simple PHP Framework (MVC)
 *
 * @author  Munaf Aqeel Mahdi <munafaqeelmahdi@gmail.com>
 */


// Require autoload files
require_once __DIR__.'/../vendor/autoload.php';

use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;
use App\Functions as Func;

// Enable or Disable debuging
if (Func::env('APP_DEBUG','ture') == 'true') {
	$run     = new Whoops\Run;
	$handler = new PrettyPageHandler;

	// Set the title of the error page:
	$handler->setPageTitle("Whoops! There was a problem.");

	$run->pushHandler($handler);

	// Add a special handler to deal with AJAX requests with an
	// equally-informative JSON response. Since this handler is
	// first in the stack, it will be executed before the error
	// page handler, and will have a chance to decide if anything
	// needs to be done.
	if (Whoops\Util\Misc::isAjaxRequest()) {
	  $run->pushHandler(new JsonResponseHandler);
	}

	// Register the handler with PHP, and you're set!
	$run->register();
}else{
	error_reporting(0);
}

// Require database connection
require_once __DIR__.'/../config/database.php';

// Require web routes
require_once __DIR__.'/../routes/web.php';
$web = new Web;