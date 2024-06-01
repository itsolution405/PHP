<!-- Check Status tambah data -->
<?php
	// if(!isset($_GET['page'])){
	// 	include "../session_check.php";
	// }	
?>

<!-- Tabel Data Dosen -->
<div class="tabel-page">
	<div class="tabel-heading">
		Daftar Dosen yang Mengajar
	</div>	
	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>ID Dosen</h5></th>
				<th><h5>Nama Dosen</h5></th>						
			</tr>
		</thead>
		<!-- Kode untuk mengambil data dosen -->
		<?php
			include "../config/db_connection.php";

			$sql = "SELECT * from dosen as d
					INNER JOIN mengajar as me ON d.ID_Dosen = me.ID_Dosen
    				INNER JOIN nilai as n ON n.ID_Matkul = me.ID_Matkul AND n.NIM = ".$_SESSION['nim'];


			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>
				<!-- Menampilkan Data Dosen -->
		        <tr>
		        	<td><?php echo $row["ID_Dosen"];?></td>
		        	<td><?php echo $row["Nama_Dosen"];?></td>		        		        
		        </tr>
		<?php							
		    	}
			} 			
			mysqli_close($conn);
		?>

	</table>
</div>
