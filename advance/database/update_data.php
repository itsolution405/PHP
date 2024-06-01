<?php
	include 'db_connection.php';
	
    $sql = "UPDATE mahasiswa SET Alamat='Jakarta' WHERE NIM='171511001'";

	$result = $conn->query($sql);
	
	if($result){
		echo "Update data berhasil";
	}
	else{
		echo "Update data gagal";
	}

	$conn->close();	
?>