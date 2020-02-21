<?php

namespace App\Framework;

use \App\Framework\RegexRouter as Router;

class Dispatcher
{

	/**
	 * DISPATCH FUNCTIONALITY -- EVENTUALLY SHOULD BE REMOVED OT ITS OWN CLASS
	 */
	public static function dispatch()
	{
		$request = Router::getCleanRequest();

		if ('GET' == $_SERVER['REQUEST_METHOD']) {
			$routes = Router::getGetRoutes();
			if(empty($request)) $request = 'home';
			// each $key is a regular expression
			// each $func is the callbe assigned to it
			//var_dump(__FUNCTION__ . ' -> '. $request);
			foreach ($routes as $key => $func) {
				if(preg_match($key, $request, $matches)) {
					// remove full string match from $matches
					array_shift($matches);
					call_user_func_array($func, $matches);
					break;
				}
			}
		}

		if ('POST' == $_SERVER['REQUEST_METHOD']) {
			$routes = Router::getPostRoutes();
			if(empty($request)) $request = 'home';
			foreach ($routes as $key => $func) {
				if(preg_match($key, $request, $matches)) {
					array_shift($matches);
					call_user_func_array($func, $matches);
					break;
				}
			}
		}

	}

// ends class	
}
