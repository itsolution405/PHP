<!-- Check Status tambah data -->
<?php
	if(!isset($_GET['page'])){
		include "../session_check.php";
	}
	
	if(isset($_GET['status'])){
		echo '<script>alert("Input Data Gagal")</script>'; 
	}
?>

<!-- Tabel List Mahasiswa -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Nilai		
	</div>
	<div class="search-box">		
		<form method="get" action="#">
			<input type="hidden" name="page" value="nilai">
			<label for="ftingkat">Tingkat: <input list="tingkat" name="tingkat" type="text">
			</label>
			<datalist id="tingkat">					
				<option value="1">1</option>			
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</datalist>	
			<button class="button-input" id="myBtn" type="submit">
			<i class="fa fa-search" aria-hidden="true"></i>Search
		</button>
		</form>				
	</div>
	<div class="data-result">		
		<table id="list-data" class="display">	
			<thead>
				<tr>
					<th><h5>NIM</h5></th>
					<th><h5>Nama</h5></th>					
					<th><h5>Detail Nilai</h5></th>									
				</tr>
			</thead>
			<!-- Kode untuk mengambil data dosen -->
			<?php		
				include "../config/db_connection.php";	

				$tingkat = "0";
				if(isset($_GET['tingkat'])){
					$tingkat = "'".$_GET['tingkat']."'";	
					$a_tingkat = $_GET['tingkat'];
				}
				
				$sql = "SELECT * from mahasiswa WHERE tingkat = ".$tingkat."";					
				$result = mysqli_query($conn, $sql);				

				if (mysqli_num_rows($result) > 0) {
					$i = 1;
			    	while($row = mysqli_fetch_assoc($result)) {		    	
			?>
					<!-- Menampilkan Data Mahasiswa -->
			        <tr>
			        	<td><?php echo $row["NIM"];?></td>
			        	<td><?php echo $row["Nama_Mhs"];?></td>			        	        				        
			        	<td>		        		
			        		<a href="admin_home_page.php?page=nilai&tingkat=<?php echo $a_tingkat?>&detail=<?php echo $row["NIM"]?> ">			        		
			        		<button class="button-edit" id="buttonEdit" >
								<i class="fa fa-info" aria-hidden="true"></i>
			        			Detail
							</button>		        								
							</a>
			        	</td>		        		               
			        </tr>		        
			<?php							
					$i++;
			    	}
				} 							
			?>
		</table>


	</div>

	<div style="clear: both;"></div>
</div>

<!-- Menampilkan Detail Nilai Mahasiswa -->
<?php
if(isset($_GET['detail'])){
	$nim = "'".$_GET['detail']."'";
	$a_nim = $_GET['detail'];

	include "../config/db_connection.php";	
	// Get Data Mata Kuliah
	$sql_matkul = "SELECT * FROM mata_kuliah";	
	$result_matkul = mysqli_query($conn, $sql_matkul);

	// Get Data Nilai
	$sql = "SELECT * FROM nilai as n  
			INNER JOIN mahasiswa as m ON m.NIM = ".$nim." AND m.NIM = n.NIM
			INNER JOIN mata_kuliah as mk ON mk.ID_Matkul = n.ID_Matkul";	
	$result = mysqli_query($conn, $sql);
?>
	<div class="tabel-page">
		<div class="tabel-heading">
			<b>Detail Nilai</b> : <?php echo $nim ?>	
		</div>
		<div class="button-container">
			<button class="button-input" id="myBtn" onclick="show_modal(0)">
				<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
			</button>
		</div>
		<table id="list-data" class="display">	
			<thead>
				<tr>
					<th><h5>Mata Kuliah</h5></th>
					<th><h5>Nilai</h5></th>
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
		        	<td><?php echo $row["Nama_Matkul"];?></td>
		        	<td><?php echo $row["Nilai"];?></td>
		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Update
						</button>		        								
		        	</td>
		        	<td>
		        		<a href='javascript:hapusDataNilai("<?php echo $row['NIM']?>", "<?php echo $row['ID_Matkul']?>", "<?php echo $a_tingkat?>")'>	        			
		        			<button class="button-delete">
								<i class="fa fa-trash" aria-hidden="true"></i> Delete
							</button>
		        		</a>
		        	</td>			        		               
		        </tr>	

		        <!-- Modal Update Data Nilai -->
				<div id="myModal<?php echo $i?>" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					    <div class="modal-header">
					      <span class="close" id="close<?php echo $i?>">&times;</span>
					      <h2>Update Nilai Mahasiswa</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="nilai/nilai_update.php">
						      	<input type="hidden" name="old_nim" value="<?php echo $row['NIM'] ?>">
						      	<input type="hidden" name="old_id" value="<?php echo $row['ID_Matkul'] ?>">
						      	<input type="hidden" name="tingkat" value="<?php echo $a_tingkat ?>">
								
								<label for="fnama">Nama</label>
								<input type="text" id="fnama" name="nama" value="<?php echo $row['Nama_Mhs']?>" readonly>
								<label for="fmatkul">Mata Kuliah</label>
								<input type="text" id="falamat" name="matkul" value="<?php echo $row['Nama_Matkul']?>" readonly>
								<label for="fnilai">Nilai</label>
								<input type="text" id="fnilai" name="nilai" list="nilai" value="<?php echo $row['Nilai']?>">
								<datalist id="nilai">					
									<option value="A">A</option>			
									<option value="AB">AB</option>
									<option value="B">B</option>
									<option value="BC">BC</option>
									<option value="C">C</option>
									<option value="CD">CD</option>
									<option value="D">D</option>
									<option value="E">E</option>
								</datalist>	
								<input type="submit" value="Update">
							</form>
					    </div>    
					</div>
				</div>	        
			<?php							
				$i++;
		    	}
			} 			
			mysqli_close($conn);
			?>
		</table>
	</div>
	<!-- Modal untuk input data nilai -->
	<div id="myModal0" class="modal">
	  <div class="modal-content">
	    <div class="modal-header">
	      <span class="close" id="close0">&times;</span>
	      <h2>Tambah Data Nilai Mata Kuliah</h2>
	      <hr>
	    </div>
	    <div class="modal-body">
	      <form name="login" method="post" action="nilai/nilai_input.php">
	      	<input type="hidden" name="tingkat" value="<?php echo $a_tingkat ?>">
			<label for="fnim">NIM</label>
			<input type="text" id="fnim" name="nim" value="<?php echo $a_nim ?>" readonly>			
			<label for="fmatkul">Mata Kuliah</label>
			<input type="text" id="fmatkul" name="matkul" list="matkul" placeholder="Mata Kuliah">
				<datalist id="matkul">					
				<?php						
				if (mysqli_num_rows($result_matkul) > 0) {				
			    	while($row_matkul = mysqli_fetch_assoc($result_matkul)) {		    	
				?>			
					<option value="<?php echo $row_matkul['ID_Matkul']?>">
						<?php echo $row_matkul['Nama_Matkul']?>	
					</option>

				<?php
					}
				}
				?>
				</datalist>	
			<label for="ftingkat">Nilai</label>
			<input type="text" id="fnilai" name="nilai" list="nilai" placeholder="Nilai">
				<datalist id="nilai">					
					<option value="A">A</option>			
					<option value="AB">AB</option>
					<option value="B">B</option>
					<option value="BC">BC</option>
					<option value="C">C</option>
					<option value="CD">CD</option>
					<option value="D">D</option>
					<option value="E">E</option>
				</datalist>	

			<input type="submit">
		</form>
	    </div>    
	  </div>
	</div>
<?php
	}
?>