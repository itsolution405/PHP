<?php
	include 'db_connection.php';
	    
	$sql = "DELETE FROM mahasiswa WHERE NIM='171511001'";
	$result = $conn->query($sql);
	
	if($result){
		echo "Delete data berhasil";
	}
	else{
		echo "Delete data gagal";
	}

	$conn->close();	
?>