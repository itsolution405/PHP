<?php	
	$old_id = $_POST['old_id'];	
	$old_id_dosen = $_POST['old_id_dosen'];	
	$ruangan = $_POST['ruangan'];	
	$hari = $_POST['hari'];	
	$j_masuk = $_POST['j_masuk'];	
	$j_keluar = $_POST['j_keluar'];
	
	echo $old_id;
	echo $ruangan;
	echo $hari;
	include "../../config/db_connection.php";

	$query = "UPDATE jadwal SET ID_Ruangan='$ruangan', Hari='$hari', Jam_Masuk ='$j_masuk', Jam_Keluar ='$j_keluar' WHERE ID_Jadwal='$old_id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=jadwal_mengajar&dosen=".$old_id_dosen);		
	}
	else{		
		header("location:../admin_home_page.php?page=jadwal_mengajar&status=error"); 		
	}	
?>