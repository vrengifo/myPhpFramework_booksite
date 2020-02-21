<?php

namespace App\Framework;

class View
{

	protected static $view_path;

	public static function init($view_path)
	{
		static::$view_path = $view_path;
	}

	public static function show($view, $data)
	{
		$file = static::$view_path . '/' . $view . '.php';
		extract($data);
		if(file_exists($file)) {
			require $file;
		} else {
			throw new \Exception('View file not found');
		}
	}

// ends class	
}
