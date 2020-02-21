<?php

use App\Framework\RegexRouter as Route;

/*
Route::get('/pages/about', function(){
	echo '<h1>About us!</h1>';
});

Route::get('/pages/shop', function(){
	echo '<h1>Shop for Clothes!</h1>';
});

Route::get('/pages/contact', function(){
	echo '<h1>Please use our contact form!</h1>';
});

Route::post('/pages/contact', function(){
	//echo '<h1>Shop for Clothes!</h1>';
	var_dump($_POST);
});
*/

// /^\/?([a-z]+)\/?$/
Route::get('home', function(){
	App\Controllers\PageController::home();
});

// /^\/?([a-z]+)\/?$/
// 0 = /about
// 1 = about
Route::get('/about', function(){
	App\Controllers\PageController::about();
});

Route::get('shop', function(){
	App\Controllers\PageController::shop();
});

Route::get('contact', function(){
	App\Controllers\PageController::contact();
});

Route::post('contact', function(){
	App\Controllers\PageController::contact_send();
});


/**
 * BOOK Routes
 */

Route::get('/books', function () {
	App\Controllers\BooksController::index();
});