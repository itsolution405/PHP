<?php

	var_dump(40 > 30); // Menampilkan bool(true)
	var_dump(30 >= 30); // Menampilkan bool(true)

	var_dump(50 < 50); // Menampilkan bool(false)
	var_dump(50 <= 50); // Menampilkan bool(true)


	var_dump(10 <=> 20); // Menampilkan int(-1)
	var_dump(20 <=> 20); // Menampilkan int(0)
	var_dump(30 <=> 20); // Menampilkan int(1)
	
?>