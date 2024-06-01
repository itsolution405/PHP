<?php	
	$old_id = $_POST['old_id'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	$sks = $_POST['sks'];	
	$semester = $_POST['semester'];	
	
	echo $old_id;
	include "../../config/db_connection.php";

	$query = "UPDATE mata_kuliah SET ID_Matkul='$id', Nama_Matkul='$nama', SKS_Matkul='$sks', Semester = '$semester' WHERE ID_Matkul='$old_id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=matkul");		
	}
	else{		
		header("location:../admin_home_page.php?page=matkul&status=error"); 		
	}	
?>