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

		<div>
			<p>Title: <?=$book['title']?></p>
			<p>Year Published: <?=$book['year_published']?></p>
			<p>Num of Pages: <?=$book['num_pages']?></p>
			<p>Price: <?=$book['price']?></p>
      <p><img src="/images/covers/<?=e_attr($book['image'])?>" style="width: 75px; height: auto"></p>
			<p>Description: <br /><?=$book['description']?></p>
			<p><a href="/books">Book List</a></p>
		</div> 


  </body>
</html>