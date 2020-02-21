<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
	<style>
      /* CSS Style Embedded */
      body{
        font-size: 16px;
        font-family: Arial, sans-serif;
      }
    </style>
  </head>
  <body>
		<h1><?=$title?></h1>
    <h2>Edit Book</h2>
		<div>
			<form method="post" action="/books/update" enctype="multipart/form-data">
        <input type="hidden" name="book_id" value="<?=e_attr($book['book_id'])?>">
        <p>
          <label for="title">Title</label>
          <input type="text" name="title" value="<?=e_attr($book['title'])?>"> 
        </p>
        <p>
          <label for="year_published">Year Published</label>
          <input type="text" name="year_published" value="<?=e_attr($book['year_published'])?>"> 
        </p>
        <p>
          <label for="num_pages">Num Pages</label>
          <input type="text" name="num_pages" value="<?=e_attr($book['num_pages'])?>"> 
        </p>
        <p>
          <label for="price">Price</label>
          <input type="text" name="price" value="<?=e_attr($book['price'])?>"> 
        </p>
        <p>
          <label for="image">Image</label>
          <input type="file" name="image" value="<?=e_attr($book['image'])?>"> 
          <img src="/images/covers/<?=e_attr($book['image'])?>" style="width: 75px; height: auto"> 
        </p>        
        <p>
          <label for="description">Description</label>
          <textarea name="description" style=""><?=e_attr($book['description'])?></textarea>
        </p>
        <p><button>Update</button></p>

  			<p><a href="/books">Book List</a></p>
      </form>
		</div> 


  </body>
</html>