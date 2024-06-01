<?php	
	$old_id = $_POST['old_id'];	
	$old_nim = $_POST['old_nim'];	
	$nilai = $_POST['nilai'];		
	$tingkat = $_POST['tingkat'];		

	include "../../config/db_connection.php";

	$query = "UPDATE nilai SET Nilai='$nilai' WHERE ID_Matkul='$old_id' AND NIM='$old_nim'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$old_nim);		
	}
	else{		
		header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$old_nim."&status=error"); 		
	}	
?>
