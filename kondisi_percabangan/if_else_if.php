<?php
	
    $nilai = 80;

    if($nilai >= 80){
    	echo "Nilai anda A";
    }
    else if($nilai >= 70 and $nilai < 80){
    	echo "Nilai anda B";
    }
    else if($nilai >= 60 and $nilai < 70){
    	echo "Nilai anda C";
    }
    else if($nilai >= 50 and $nilai < 60){
    	echo "Nilai anda D";
    }
    else{
    	echo "Nilai anda E";
    }

?>