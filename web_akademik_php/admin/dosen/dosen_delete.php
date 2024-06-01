<?php

	include "../../config/db_connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		echo $id;

		$sql = "DELETE FROM dosen WHERE ID_Dosen='$id'";
		
		if ($conn->query($sql) === TRUE) {
		   	header("location:../admin_home_page.php?page=dosen");
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>