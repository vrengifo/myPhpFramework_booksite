<?php

$settings = array(
	'site_name' => 'Booksite',
	'base_path' => __DIR__,
	'db_user' => 'web_user',
	'db_pass' => 'mypass',
	'db_dsn' => 'mysql:host=localhost;dbname=booksite',
	'view_path' => __DIR__ . '/app/Views',
	'route_file' => __DIR__ . '/routes2.php'
);

return $settings;