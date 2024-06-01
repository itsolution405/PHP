<?php

	// Case Sensitive
	define("BATAS_NILAI", 80);
	echo BATAS_NILAI."<br>";	

	// Tidak Case Sensitive
	define("BATAS_NILAI", 80, true);
	echo batas_nilai."<br>";

	$nilai = 90;
	if($nilai >= batas_nilai){
		echo "Anda mendapatkan nilai A";
	}

	// define("batas_nilai_full", [
 //      80,
 //      70,
 //      60
 //    ]);

 //    echo batas_nilai_full[0];


?>