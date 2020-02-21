<?php

use App\Framework\RegexRouter as Route;

// add first the not default routes

/**
 * BOOK Routes
 */

/**
 * literal regex for books
 */
// Show all books
Route::get('/^\/?(books)\/?$/', function () {
	App\Controllers\BooksController::index();
});

// /^\/?books\/[\d]+\/show\/?$/
// 0 = books/13/show
// 1 = 13
// Show one book
Route::get('/^\/?books\/([\d]+)\/show\/?$/', function ($key) {
	App\Controllers\BooksController::show($key);
});

// Edit one book
Route::get('/^\/?books\/([\d]+)\/edit\/?$/', function ($key) {
	App\Controllers\BooksController::edit($key);
});

// Update one book
Route::post('/^\/?(books\/update)\/?$/', function () {
	App\Controllers\BooksController::update();
}); 

/**
 * literal regex for contact
 */
Route::get('/^\/?(contact)\/?$/', function(){
	App\Controllers\PageController::contact();
});

/**
 * Generic Regex to handle other pages
 * callable function.  In this case requires a parameter called page
 */
Route::get('/^\/?([a-z]+)\/?$/', function($page){
	App\Controllers\PageController::show($page);
});

