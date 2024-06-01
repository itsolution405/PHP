<!-- Check Status tambah data -->
<?php
	// 	include
	include "../config/db_connection.php";
	include "ipk.php";
	// Get Data Nilai
	$sql = "SELECT * FROM nilai as n  
			INNER JOIN mahasiswa as m ON m.NIM = ".$_SESSION['nim']." AND m.NIM = n.NIM
			INNER JOIN mata_kuliah as mk ON mk.ID_Matkul = n.ID_Matkul
			ORDER BY mk.Semester";	

	$result = mysqli_query($conn, $sql);	

	$ipk = countIPK($result);
		
	// Untuk Mengecek Hari
	$arr_hari = array("Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	$id_hari = date('w'); //gets day of week as number(0=sunday,1=monday...,6=sat)

	$hari = "'".$arr_hari[$id_hari]."'";	
 	
	// Pengambilan data jadwal hari ini							
	$sql = "SELECT * FROM nilai as n
	INNER JOIN jadwal as j ON n.NIM = ".$_SESSION['nim']." AND n.ID_Matkul = j.ID_Matkul AND j.Hari = ".$hari."
    INNER JOIN mata_kuliah as mk ON j.ID_Matkul = mk.ID_Matkul
    INNER JOIN mengajar as m ON mk.ID_Matkul = m.ID_Matkul
    INNER JOIN dosen as d ON d.ID_Dosen = m.ID_Dosen
    INNER JOIN ruangan as r ON r.ID_Ruangan = j.ID_Ruangan

    ORDER BY j.Jam_Masuk";

	$result = mysqli_query($conn, $sql);
?>

<div class="info">
	<div class="left-item">
		<i class="fa fa-graduation-cap" aria-hidden="true"></i> IPK : <?php echo $ipk[0];?>
	</div>
	<div class="right-item">
		<i class="fa fa-book" aria-hidden="true"></i>Jumlah SKS : <?php echo $ipk[1];?>
	</div>
</div>

<!-- Tabel Jadwal Kuliah -->
<div class="tabel-page">
	<div class="tabel-heading">
		Jadwal Kuliah Hari ini
	</div>	
	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>Dosen</h5></th>
				<th><h5>Mata Kuliah</h5></th>
				<th><h5>Ruangan</h5></th>
				<th><h5>Waktu</h5></th>						
			</tr>
		</thead>
		<!-- Kode untuk mengambil data dosen -->
		<?php
			

			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>
				<!-- Menampilkan Data Dosen -->
		        <tr>
		        	<td><?php echo $row["Nama_Dosen"];?></td>
		        	<td><?php echo $row["Nama_Matkul"];?></td>		        		        
		        	<td><?php echo $row["Nama_Ruangan"];?></td>
		        	<td><?php echo $row["Jam_Masuk"]."-".$row["Jam_Keluar"];?></td>
		        </tr>
		<?php							
		    	}
			} 			
			mysqli_close($conn);
		?>

	</table>
</div>
