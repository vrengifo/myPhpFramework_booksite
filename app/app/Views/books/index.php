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
			<table>
				<tr>
					<th>Del</th>
					<th>Title</th>
					<th>Year Published</th>
					<th>Num Pages</th>
					<th>Price</th>
					<th></th>
				</tr>
				<?php foreach ($books as $key => $row) : ?>
				<tr>
					<td><?=$row['book_id']?></td>
					<td><a href="books/<?=$row['book_id']?>/show"><?=$row['title']?></a></td>
					<td><?=$row['year_published']?></td>
					<td><?=$row['num_pages']?></td>
					<td><?=$row['price']?></td>
					<td>
						<!-- 
						<form action="/books/<?=$row['book_id']?>/edit" method="post">
							<input type="hidden" name="book_id" value="<?=$row['book_id']?>" />
							<button>Edit</button>
						</form>
						-->
						<a href="books/<?=$row['book_id']?>/edit">Edit</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div> 


  </body>
</html>