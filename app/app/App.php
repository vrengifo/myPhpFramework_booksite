<?php

namespace App;

use \App\Framework\RegexRouter as Router;
use \App\Framework\View;
use \App\Framework\Model;
use \App\Framework\Dispatcher;

//use \Pimple\Container;

/**
 * Bootstrap class to initialize our application 
 * and set everything 
 */
class App
{
	/**
	 * Pimple\Container 
	 * Inversion of control container
	 * @var [type]
	 */
	private $c; 

	public function __construct(\Pimple\Container $c)
	{
		$this->c = $c;
		//var_dump($this->c['dbh']);
		//var_dump('App Instantiated');

		// Initialize the router
		$this->initRouter();

		// Initialize the view
		$this->initView();

		// Initialize our base model class
		$this->initModels();
	}

	
	public function initView()
	{
		//var_dump($this->c);
		//$view_path = __DIR__ . '/Views';
		View::init($this->c['view_path']);
	}

	/**
	 * Initialize the router
	 * @return void
	 */
	private function initRouter()
	{
		Router::init();
		//var_dump('Router Initialized');
		require $this->c['route_file'];
		Router::showRoutes();
	}

	/**
	 * Initialize models with a static PDO connection
	 * @return void
	 */
	private function initModels()
	{
		//global $dbh;
		//var_dump($this->c['dbh']);
		Model::init($this->c['dbh']);
		//var_dump('Model Initialized');
	}

	public function run()
	{
		Dispatcher::dispatch();
	}

// ends class
}
