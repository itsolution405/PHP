<?php	

?>

<div class="tabel-page">
	<div class="tabel-heading">
		<b>Daftar Nilai Akademis</b>
	</div>
	
	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>Mata Kuliah</h5></th>
				<th><h5>SKS</h5></th>
				<th><h5>Semester</h5></th>
				<th><h5>Nilai</h5></th>													
			</tr>
		</thead>		
		<?php		
		include "../config/db_connection.php";	

		// Get Data Nilai
		$sql = "SELECT * FROM nilai as n  
				INNER JOIN mahasiswa as m ON m.NIM = ".$_SESSION['nim']." AND m.NIM = n.NIM
				INNER JOIN mata_kuliah as mk ON mk.ID_Matkul = n.ID_Matkul
				ORDER BY mk.Semester";	

		$result = mysqli_query($conn, $sql);				
		if (mysqli_num_rows($result) > 0) {
					
	    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>				
	        <tr>
	        	<td><?php echo $row["Nama_Matkul"];?></td>
	        	<td><?php echo $row["SKS_Matkul"];?></td>
	        	<td><?php echo $row["Semester"];?></td>
	        	<td><?php echo $row["Nilai"];?></td>
	        			        		              
	        </tr>			       
		<?php											
	    	}
		} 			
		mysqli_close($conn);
		?>
	</table>
</div>