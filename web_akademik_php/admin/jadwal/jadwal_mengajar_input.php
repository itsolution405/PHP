<?php	
	$id_dosen = $_POST['dosen'];
	$id_matkul = $_POST['matkul'];	
	$id_ruangan = $_POST['ruangan'];	
	$hari = $_POST['hari'];	
	$j_masuk = $_POST['j_masuk'];	
	$j_keluar = $_POST['j_keluar'];
	
	echo $j_masuk;
	echo $j_keluar;

	$error = 1;
	if($j_masuk < $j_keluar){
		include "../../config/db_connection.php";

		$cek_query = "SELECT * FROM mengajar WHERE ID_Matkul ='$id_matkul' AND ID_Dosen = '$id_dosen'";
		$result = mysqli_query($conn, $cek_query);
		
		if (mysqli_num_rows($result) == 0) {				
			$query = "INSERT INTO mengajar VALUES ('$id_dosen', '$id_matkul')";
			$res = $conn->query($query);

			$query_jadwal = "INSERT INTO jadwal VALUES ('','$id_dosen', '$id_matkul', '$id_ruangan', '$hari', '$j_masuk', '$j_keluar')";
			$res_jadwal = $conn->query($query_jadwal);
			mysqli_close($conn);
			
			echo $res;
			echo $res_jadwal;
			
			if($res_jadwal AND $res){
				$error = 0;
				header("location:../admin_home_page.php?page=jadwal_mengajar");		
			}				
		}				
	}	
	if($error == 1)
		header("location:../admin_home_page.php?page=jadwal_mengajar&status=error"); 		
	
?>