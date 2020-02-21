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
		<form method="post" action="/contact">
            <input type="text" name="email" placeholder="your email" /><br />
            <textarea name="message"></textarea>
            <button>Send</button>
    </form>
  </body>
</html>