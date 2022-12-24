<?php echo htmlspecialchars($_POST['name']); ?>
	<?php echo htmlspecialchars($_POST['response']); ?>
	<?php $file = file_get_contents('reviews.txt', true);
	      echo ($file); ?>

<?php
$file = 'reviews.txt';

$current = file_get_contents($file);

$current .= ($_POST['name']);
$current .= ($_POST['response']);

file_put_contents($file, $current);
?>