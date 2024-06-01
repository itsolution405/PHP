<?php		
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	
	echo $old_id;
	include "../../db_connection.php";

	$query = "UPDATE ruangan SET Nama_Ruangan='$nama' WHERE ID_Ruangan='$id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=ruangan");		
	}
	else{		
		header("location:../admin_home_page.php?page=ruangan&status=error"); 		
	}	
?>