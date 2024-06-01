<?php
	echo date_default_timezone_get()."<br>";
	echo "Sekarang jam " . date("H:i:s") ."<br>";

	date_default_timezone_set("Asia/Jakarta");
	echo date_default_timezone_get()."<br>";
	echo "Sekarang jam " . date("H:i:s");
?>