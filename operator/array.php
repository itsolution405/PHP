<?php
	
	$x = array("1", "2", "3");
	$y = array(1, 2, 3);

	var_dump($x == $y); // Menampilkan bool(true)
	var_dump($x === $y); // Menampilkan bool(false)
	var_dump($x != $y); // Menampilkan bool(false)
	var_dump($x <> $y); // Menampilkan bool(false)
	var_dump($x !== $y); // Menampilkan bool(true)
?>