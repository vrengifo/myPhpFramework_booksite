<?php 

namespace App\Controllers;

use App\Framework\Controller;
use App\Framework\View;

class PageController extends Controller
{

	// Resource methods: 
	// index = show all
	// show = show one
	// edit = edit 1
	// update = update 1
	// create = create 1
	// save = save new
	// delete = delete one


	public static function home()
	{
		//echo '<h1>Welcome!</h1>';
		$data['title'] = 'Welcome to our Website!';
		$data['content'] = '<p>This is my content.</p>';
		View::show('default.view', $data);
	}

	public static function about()
	{
		//echo '<h1>About us!</h1>';
		$data['title'] = 'About us';
		$data['content'] = '<p>This is my content.</p><p>This is my content.</p><p>This is my content.</p>';
		View::show('default.view', $data);
	}

	public static function shop()
	{
		//echo '<h1>Shop for clothes!</h1>';
		$data['title'] = 'Bookstore - shop';
		$data['content'] = '<p>Shop some items.</p><p>Bla bla bla!!.</p><p>Ble ble bleh!</p>';
		View::show('default.view', $data);	
	}

	public static function contact()
	{
		//echo '<h1>Contact us!</h1>';
		$data['title'] = 'Contact us';
		View::show('contact.view', $data);
	}

	public static function contact_send()
	{
		var_dump($_POST);
	}

	public static function show($page)
	{
		$title = ucfirst($page);
		$content = "<p>I am content for $title page</p>";
		View::show('default.view', compact('title','content'));
	}

// ends class
}
