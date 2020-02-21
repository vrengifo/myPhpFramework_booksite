<?php 

// Start output buffering and session
ob_start();
session_start();

// What's our development environment
$env = 'dev';

if($env == 'dev') {
	ini_set('display_errors', 1);
	ini_set('error_reporting', E_ALL);	
} else {
	ini_set('display_errors', 0);
}

$config = require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/Lib/functions.php';

try {
	
	$c = new Pimple\Container($config); // IoC Container  (IoC = Inversion of Control)

	// adding the database 
	$c['dbh'] = function() use($c) {
		return new \PDO($c['db_dsn'],$c['db_user'],$c['db_pass']);
	};

	//var_dump($c);
	//var_dump($c['dbh']);


	$app = new App\App($c);
	$app->run();

	//var_dump($_SERVER);

	//throw new Exception('Hei, how you doing');
} catch (Exception $e) {
	echo $e->getMessage();
	echo '<pre>';
	print_r($e->getTrace());
	echo '</pre>';
}