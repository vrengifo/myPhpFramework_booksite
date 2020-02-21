<?php

namespace App\Controllers;

use App\Framework\Controller;
use App\Framework\View;
use App\Models\BookModel as Books;
use Valitron\Validator;

class BooksController extends Controller
{

	// Resource methods: 
	// index = show all
	// show = show one
	// edit = edit 1
	// update = update 1
	// create = create 1
	// save = save new
	// delete = delete one

	public static function index()
	{
		$title = 'Book List';
		$model = new Books();
		$books = $model->all();
		/*
		// compact do this (down):
		$data['title'] = 'Book List';
		$data['books'] = [];
		*/
		View::show('/books/index', compact('title','books'));
	}

	public static function show($key)
	{
		$title = 'Book Detail';
		$model = new Books();
		$book = $model->find($key);

		View::show('/books/show', compact('title','book'));	
	}

	public static function edit($key)
	{
		$title = 'Edit Book';
		$model = new Books();
		$book = $model->find($key);

		View::show('/books/edit', compact('title','book'));	
	}

	public static function update()
	{
		/*
		var_dump($_POST);
		var_dump($_FILES);
		die;
		*/
		
		/*
		// Make sure user provided an image
		if(!empty($_FILES['image'])) {
			$_POST['image'] = $_FILES['image'];
		}
		var_dump($_POST);
		die;
		*/
		
		//$v = new Validator($_POST);
		$v = new Validator(filter_input_array(INPUT_POST));
		$v->rule('required', ['title','num_pages', 'year_published', 'price', 'description']);
		$v->validate();
		if(empty($v->errors())) {
			$model = new Books();
			$data = array(
				'book_id' => $_POST['book_id'],
				'title' => $_POST['title'],
				'price' => $_POST['price'],
				'image' => $_FILES['image']['name'] ?? null,
				'num_pages' => $_POST['num_pages'],
				'year_published' => $_POST['year_published'],
				'description' => $_POST['description']
			);
			$model->update($data);
			header('Location:/books/'.$data['book_id'].'/show');
			die;
		}
		var_dump($v->errors());
		die;

	}

	public static function save() {

	}

// ends class
}
