<?php
	include "../../config/db_connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];	
		$nim = $_GET['nim'];		
		$tingkat = $_GET['tingkat'];

		$sql = "DELETE FROM nilai WHERE ID_Matkul='$id' AND NIM='$nim'";
		$res = $conn->query($sql);
		mysqli_close($conn);
	
		if($res){		
		   	header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$nim);
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>