<?php
	include "../config/db_connection.php";

	$sql = "SELECT * FROM mahasiswa";
	$mahasiswa = mysqli_query($conn, $sql);

	$jumlah_mhs = 0;
	if (mysqli_num_rows($mahasiswa) > 0) {
		$jumlah_mhs = mysqli_num_rows($mahasiswa);
	}

	$sql = "SELECT * FROM dosen";
	$dosen = mysqli_query($conn, $sql);

	$jumlah_dosen = 0;
	if (mysqli_num_rows($dosen) > 0) {
		$jumlah_dosen = mysqli_num_rows($dosen);
	}

	$sql = "SELECT * FROM mata_kuliah";
	$matkul = mysqli_query($conn, $sql);

	$jumlah_matkul = 0;
	if (mysqli_num_rows($matkul) > 0) {
		$jumlah_matkul = mysqli_num_rows($matkul);
	}

	$sql = "SELECT * FROM ruangan";
	$ruangan = mysqli_query($conn, $sql);

	$jumlah_r = 0;
	if (mysqli_num_rows($ruangan) > 0) {
		$jumlah_r = mysqli_num_rows($ruangan);
	}
    	
?>	   
<div class="item dosen">
	<div class="icon-user">
		<i class="fa fa-users fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Dosen</h3>
		<p class="data"><?php echo $jumlah_dosen?></p>	
	</div>
</div>
<div class="item mahasiswa">
	<div class="icon-user">
		<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Mahasiswa</h3>
		<p class="data"><?php echo $jumlah_mhs?></p>
	</div>
</div>
<div class="item matkul">
	<div class="icon-user">
		<i class="fa fa-book fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Mata Kuliah</h3>
		<p class="data"><?php echo $jumlah_matkul?></p>
	</div>
</div>
<div class="item ruangan">
	<div class="icon-user">
		<i class="fa fa-building fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Ruangan</h3>
		<p class="data"><?php echo $jumlah_r?></p>	
	</div>
</div>

<!-- <div class="d-mahasiswa">
	<div class="icon-user">
		<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
	</div>
	<div class="data-user">	
		<table class="data">
			<tr>
				<td class="jumlah-dosen">
					<?php echo $jumlah_mhs?>
				</td>			
			</tr>
			<tr>
				<td>Mahasiswa</td>			
			</tr>
		</table>
	</div>
</div> -->