<?php
	
    $nilai = array(80, 70, 49, 50);
    $jumlah = 0;
    for ($i=0; $i < 4; $i++) { 
    	if($nilai[$i] <= 50){    		
    		continue;
    	}
        $jumlah++;
    }

    echo "Jumlah nilai yang melebihi batas minimal adalah ".$jumlah;

?>