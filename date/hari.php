<?php
	$nama_hari = array("Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

	$id_hari = date("w");

	echo "Hari ini adalah ". $nama_hari[$id_hari];

?>