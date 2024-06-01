<?php	
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	
	include "../../config/db_connection.php";

	$query = "INSERT INTO dosen VALUES ('$id', '$nama')";

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=dosen");		
	}
	else{		
		header("location:../admin_home_page.php?page=dosen&status=error"); 		
	}	
?>