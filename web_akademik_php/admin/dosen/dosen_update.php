<?php	
	$old_id = $_POST['old_id'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	
	include "../../config/db_connection.php";

	$query = "UPDATE dosen SET ID_Dosen='$id', Nama_Dosen='$nama' WHERE ID_Dosen='$old_id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=dosen");		
	}
	else{		
		header("location:../admin_home_page.php?page=dosen&status=error"); 		
	}	
?>