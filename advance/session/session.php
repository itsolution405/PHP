<?php
	/* mengaktifkan session */
	session_start();

	/* deklarasi dan inisiasi variabel session */
	$_SESSION["Nama"] = "Akbar";
	$_SESSION["NIM"] = "171511001";

	/* periksa variabel session */
	if(isset($_SESSION["Nama"]))
	{
	   echo "Data Nama Pada Session adalah ".$_SESSION["Nama"];
	}
	else
	{
	   echo "Variable session Nama belum di set";
	}

?>