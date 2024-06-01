<?php	
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tingkat = $_POST['tingkat'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	
	include "../../config/db_connection.php";

	$query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$tingkat', '$password','$alamat')";

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=mahasiswa");		
	}
	else{		
		header("location:../admin_home_page.php?page=mahasiswa&status=error"); 		
	}	
?>