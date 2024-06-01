<?php
	include 'db_connection.php';

	$sql = "SELECT * FROM mahasiswa";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) {
    	echo "NIM: " . $row["NIM"]. " - Nama: " . $row["Nama_Mhs"]."<br>";
  	}
	
?>