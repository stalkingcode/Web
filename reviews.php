<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Відгуки</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="reviews.php" method="post">
 	<p>Your name: <input type="text" name="name" /></p>
 	<p>Your response: <input type="text" name="response" /></p>
 	<p><input type="submit" /></p>
	</form>
<?php require 'response.php' ?>

</body>
</html>