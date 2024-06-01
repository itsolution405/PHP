<?php
	if(!isset($_SESSION['logged-in'])){		
		header('Location: ../index.php');
	}	
?>