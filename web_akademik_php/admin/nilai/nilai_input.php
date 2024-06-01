<?php	
	$id = $_POST['matkul'];
	$nim = $_POST['nim'];	
	$nilai = $_POST['nilai'];		
	$tingkat = $_POST['tingkat'];

	include "../../config/db_connection.php";

	$cek_query = "SELECT * FROM nilai WHERE ID_Matkul='$id' AND NIM='$nim'";
	$result = mysqli_query($conn, $cek_query);
		
	$error = 1;
	if (mysqli_num_rows($result) == 0) {
		$query = "INSERT INTO nilai VALUES ('$id', '$nim', '$nilai')";

		$res = $conn->query($query);
		mysqli_close($conn);
		
		if($res){
			$error = 0;
			header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$nim);		
		}		
	}
	if($error == 1)
		header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$nim."&status=error");

?>