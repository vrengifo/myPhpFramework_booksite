<?php

namespace App\Framework;

class Router
{

	/**
	 * Raw request received by Apache, and available in $_SERVER
	 * @var [type]
	 */
	protected static $raw_request;

	/**
	 * Clean request after we've trimmed it and neatned it up
	 * Strip everything after index.php, strip leading slashes, strip question mark
	 * @var [type]
	 */
	protected static $clean_request;

	protected static $getRoutes = [];

	protected static $postRoutes = [];



	public static function init()
	{
		static::setRawRequest();
		static::setCleanRequest();
		/*
		var_dump('Router Initialized');
		var_dump(static::$raw_request);
		var_dump(static::$clean_request);
		*/
	}

	private static function setRawRequest()
	{
		static::$raw_request = filter_input(INPUT_SERVER, 'REQUEST_URI');
	}

	private static function setCleanRequest()
	{
		// remove index.php
		// remove ?
		// remove trailing/leading slashes
		$request = static::$raw_request;
		$request = str_replace('index.php', '', $request);
		$request = str_replace('?', '', $request);
		$request = trim($request,'/ ');
		static::$clean_request = $request;
	}

	public static function get(string $route, Callable $callback)
	{
		$route = trim($route,'/ ');
		static::$getRoutes[$route] = $callback;
	}

	public static function post(string $route, Callable $callback)
	{
		static::$postRoutes[$route] = $callback;
	}

	public static function showRoutes()
	{
		/*
		var_dump(static::$getRoutes);
		var_dump(static::$postRoutes);
		*/
	}

	/**
	 * DISPATCH FUNCTIONALITY -- EVENTUALLY SHOULD BE REMOVED OT ITS OWN CLASS
	 */
	public static function dispatch()
	{
		if ('GET' == $_SERVER['REQUEST_METHOD']) {
			$request = static::$clean_request;
			$routes = static::$getRoutes;
			//var_dump(__FUNCTION__ . ' -> '. $request);
			if(empty($request)) $request = 'home';
			if(array_key_exists($request, $routes)) {
				call_user_func($routes[$request]);
			}
		}

		if ('POST' == $_SERVER['REQUEST_METHOD']) {
			$request = static::$clean_request;
			$routes = static::$postRoutes;
			if(empty($request)) $request = 'home';
			if(array_key_exists($request, $routes)) {
				call_user_func($routes[$request]);
			}
		}

	}

// ends class
}
