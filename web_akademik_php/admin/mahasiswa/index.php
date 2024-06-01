
<?php
	if(isset($_GET['status'])){
		echo '<script>alert("Input Data Gagal")</script>'; 
	}
	include "../config/db_connection.php";
	
	// Cek session
	if(!isset($_SESSION['logged-in'])){		
		include "../session_check.php";
	}

	$query = "SELECT * FROM mahasiswa";
	$result = mysqli_query($conn, $query);
?>

<div class="tabel-page">
	<div class="tabel-heading">
		Data Mahasiswa		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>
	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>NIM</h5></th>
				<th><h5>Nama</h5></th>
				<th><h5>Tingkat</h5></th>
				<th><h5>Alamat</h5></th>
				<th><h5>Update</h5></th>
				<th><h5>Delete</h5></th>			
			</tr>
		</thead>	
		<?php
			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
		        	<td><?php echo $row["NIM"];?></td>
		        	<td><?php echo $row["Nama_Mhs"];?></td>
		        	<td><?php echo $row["Tingkat"];?></td>
		        	<td><?php echo $row["Alamat"];?></td>		        	
		        	<td>
		        		<button class="button-edit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>Update
						</button>
		        	</td>
		        	<td>		        		
		        		<a href='javascript:hapusDataMhs("<?php echo $row['NIM']?>")'>
		        			<button class="button-delete">
								<i class="fa fa-trash" aria-hidden="true"></i> Delete
							</button>
		        		</a>
		        	</td>		        	
		        </tr>

		        <!-- Modal Update Data -->
				<div id="myModal<?php echo $i?>" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					    <div class="modal-header">
					      <span class="close" id="close<?php echo $i?>">&times;</span>
					      <h2>Update Data Mahasiswa</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="mahasiswa/mahasiswa_update.php">						      	
								<label for="fnim">NIM</label>
								<input type="text" id="fnim" name="nim" value="<?php echo $row['NIM']?>" maxlength="9" readonly>
								<label for="fnama">Nama</label>
								<input type="text" id="fnama" name="nama" value="<?php echo $row['Nama_Mhs']?>" required>
								<label for="ftingkat">Tingkat</label>
								<input type="text" id="ftingkat" name="tingkat" value="<?php echo $row['Tingkat']?>" required>
								<label for="falamat">Alamat</label>
								<input type="text" id="falamat" name="alamat" value="<?php echo $row['Alamat']?>" required>

								<input type="submit" value="Update">
							</form>
					    </div>    
					</div>
				</div>
			    
		<?php
				$i++;
		    	}
			} 
			else {
		    		echo "0 results";
			}

			mysqli_close($conn);
		?>
	</table>
</div>

<!-- Modal untuk input data baru -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Mahasiswa</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="mahasiswa/mahasiswa_input.php">
		<label for="fnim">NIM</label>
		<input type="text" id="fnim" name="nim" placeholder="NIM" maxlength="9" required>
		<label for="fnama">Nama</label>
		<input type="text" id="fnama" name="nama" placeholder="Nama" pattern="[a-zA-Z ]+" title="Masukan Hanya Huruf" required>
		<label for="ftingkat">Tingkat</label>
		<input type="number" id="ftingkat" list="tingkat" name="tingkat" placeholder="Tingkat" min=1 required>
			<datalist id="tingkat">					
				<option value="1">1</option>			
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</datalist>	
		<label for="falamat">Alamat</label>
		<input type="text" id="falamat" name="alamat" placeholder="Alamat" required>
		<label for="fpass">Password</label>
		<input type="password" id="fpass" name="password" pattern="[a-zA-Z0-9]+" title="Masukan Hanya Alphanumeric" required>
		<input type="submit">
	</form>
    </div>    
  </div>
</div>