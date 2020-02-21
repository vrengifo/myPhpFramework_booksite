<?php

namespace App\Models;

use App\Framework\Model;

class BookModel extends Model
{

	protected $table = 'book';
	protected $key = 'book_id';

	protected $allowed = ['book_id','title','num_pages','year_published','price','image','description'];

	public function update(array $data) {
		$params = array(
				':title' => $data['title'],
				':num_pages' => $data['num_pages'],
				':year_published' => $data['year_published'],
				':price' => $data['price'],
				':description' => $data['description'],
				':book_id' => $data['book_id']
		);
		if(!empty($data['image'])) {
			$params['image'] = $data['image'];

			$query = 'UPDATE book SET 
					title = :title, 
					num_pages = :num_pages, 
					year_published = :year_published, 
					price = :price, 
					image = :image, 
					description = :description 
					WHERE book_id = :book_id';
		} else {
			$query = 'UPDATE book SET 
					title = :title, 
					num_pages = :num_pages, 
					year_published = :year_published, 
					price = :price, 
					description = :description 
					WHERE book_id = :book_id';
		}
		
		$stmt = static::$dbh->prepare($query);
		
		if($stmt->execute($params)) {
			return true;
		}
		return false;

	}

// ends class	
}
