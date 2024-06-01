<?php
	session_start();	
	if(!isset($_SESSION['logged-in']))
	{		
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/style/homepage.css">
		<link rel="stylesheet" href="../assets/style/tabel.css">
		<link rel="stylesheet" href="../assets/style/dashboard.css">		
		<link rel="stylesheet" href="../assets/style/modal.css">

		<!-- Datatables -->		
		<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
		
		<!-- <link href="../style/datatables.min.css" rel="stylesheet" /> -->
		<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="../assets/js/datatables.min.js"></script>
		<!-- <script src="../js/datatables.min.js"></script>		 -->

		<title>Mahasiswa</title>						
	</head>
	<body>
	<div class="container">
		<div id="page-h" class="page-header">
			<div class="page-logo">
				<img class="logo" src="../assets/image/logo.png"/>
			</div>
			<h3 class="menu-heading">Dashboard</h3>
			<a href="?page=dashboard"><i class="fa fa-tachometer fa-icon" aria-hidden="true"></i>Dashboard</a>
			<h3 class="menu-heading">Dosen</h3>
	  		<a href="?page=dosen" ><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Daftar Dosen</a>	 
	  		<h3 class="menu-heading">Akademik</h3>
	  		<a href="?page=matkul"><i class="fa fa-book fa-icon" aria-hidden="true"></i>Daftar Mata Kuliah</a>
	  		<a href="?page=nilai"><i class="fa fa-graduation-cap fa-icon" aria-hidden="true"></i>Daftar Nilai</a>	  			  			  
		</div>	
		<div class="page-content">
			<div class="content-header">
				<span><?php echo $_SESSION['username']?></span>
				<img src="../assets/image/user.png" class="icon" />
				<div class="admin-icon">
				<a class="link" href="logout.php">										
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Logout</span>					
				</a>
				</div>			
			</div>

			<div class="content">				
				<?php
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
					switch ($page) {
						case "dashboard":
							include "dashboard.php";
							break;
						case "dosen":
							include "dosen_page.php";
							break;												
						case "matkul":
							include "matkul_page.php";
							break;						
						case "nilai":
							include "nilai_page.php";
							break;																										
					}
				}
			?>
			</div>		
		</div>
	</div>	
	
	</body>
</html>