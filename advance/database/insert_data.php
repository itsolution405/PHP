<?php
	include 'db_connection.php';
	
    $sql = "INSERT INTO mahasiswa VALUES ('171511001', 'Akbar', 3, 'd3mo','Bandung')";

	$result = $conn->query($sql);

	var_dump($result);
	if($result){
		echo "Insert data berhasil";
	}
	else{
		echo "Insert data gagal";
	}

	$conn->close();	
?>