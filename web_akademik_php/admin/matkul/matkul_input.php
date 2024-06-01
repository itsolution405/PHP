<?php	
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	$sks = $_POST['sks'];	
	$semester = $_POST['semester'];	
	
	include "../../config/db_connection.php";

	$query = "INSERT INTO mata_kuliah VALUES ('$id', '$nama', '$sks', '$semester')";

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=matkul");		
	}
	else{		
		header("location:../admin_home_page.php?page=matkul&status=error"); 		
	}	
?>