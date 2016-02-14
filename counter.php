<?php
	$file = 'count.txt';
	$current = file_get_contents($file);
	print $current;
	$current++ + 1;
	print $current;
	file_put_contents($file, $current);
	echo "Lehe külastuste arv on: " . $current;
?>
