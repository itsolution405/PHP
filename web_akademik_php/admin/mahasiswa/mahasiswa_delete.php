<?php
	include "../../config/db_connection.php";
	if(isset($_GET['nim'])){
		$nim = $_GET['nim'];

		$query = "DELETE FROM mahasiswa WHERE NIM='$nim'";
		$res = $conn->query($query);
		
		if ($conn->affected_rows > 0) {
		   	header("location:../admin_home_page.php?page=mahasiswa");
		} 
		else {
		    header("location:../admin_home_page.php?page=mahasiswa&status=error");
		}
	}		
?>