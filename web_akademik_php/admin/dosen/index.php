<!-- Check Status tambah data -->
<?php
	if(!isset($_GET['page'])){
		include "../session_check.php";
	}

	if(isset($_GET['status'])){
		echo '<script>alert("Input Data Gagal")</script>'; 
	}
?>

<!-- Tabel Data Dosen -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Dosen		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>

	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>ID Dosen</h5></th>
				<th><h5>Nama Dosen</h5></th>
				<th><h5>Update</h5></th>
				<th><h5>Delete</h5></th>			
			</tr>
		</thead>
		<!-- Kode untuk mengambil data dosen -->
		<?php
			include "../config/db_connection.php";

			$sql = "SELECT * FROM dosen";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>
				<!-- Menampilkan Data Dosen -->
		        <tr>
		        	<td><?php echo $row["ID_Dosen"];?></td>
		        	<td><?php echo $row["Nama_Dosen"];?></td>
		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Update
						</button>		        								
		        	</td>
		        	<td>
		        		<a href='javascript:hapusData("<?php echo $row['ID_Dosen']?>", 1)'>		        			
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
					      <h2>Update Data Dosen</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="dosen/dosen_update.php">
						      	<input type="hidden" name="old_id" value="<?php echo $row['ID_Dosen']?>">
								<label for="fid">ID Dosen</label>
								<input type="text" id="fid" name="id" value="<?php echo $row['ID_Dosen']?>" maxlength="7" required>
								<label for="fnama">Nama</label>
								<input type="text" id="fnama" name="nama" value="<?php echo $row['Nama_Dosen']?>" required>
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

<!-- Modal Input Data -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Dosen</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="dosen/dosen_input.php">
		<label for="fid">ID Dosen</label>
		<input type="text" id="fid" name="id" placeholder="ID Dosen" maxlength="7" required>
		<label for="fnama">Nama</label>
		<input type="text" id="fnama" name="nama" placeholder="Nama" required>
		<input type="submit">
	</form>
    </div>    
  </div>
</div>