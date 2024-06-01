<?php

	include "../../config/db_connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];		

		$sql = "DELETE FROM mata_kuliah WHERE ID_Matkul='$id'";
		
		if ($conn->query($sql) === TRUE) {
		   	header("location:../admin_home_page.php?page=matkul");
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>