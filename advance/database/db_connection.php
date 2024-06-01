<?php
	$hostname = "localhost";
	/* konfigurasi mySQL */
	$user_db="root"; //tuliskan root untuk default DB location mySQL
	$pass_db=""; //password mySQL, kosongkan bila tidak didefine
	$db_name="db_webakademis_php"; //nama database yg ingin terhubung

	/* membuat koneksi */
	$conn = new mysqli($hostname, $user_db, $pass_db);

	/* cek koneksi */
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else{
		mysqli_select_db($conn, $db_name);	
	}
	
?>