<?php

namespace App\Framework;

class RegexRouter
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

	public static function getRawRequest()
	{
		return static::$raw_request;
	}

	public static function getCleanRequest()
	{
		return static::$clean_request;
	}

	public static function getGetRoutes()
	{
		return static::$getRoutes;
	}

	public static function getPostRoutes()
	{
		return static::$postRoutes;
	}




// ends class
}
