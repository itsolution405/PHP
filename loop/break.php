<?php
	
    $mahasiswa = array("Tubagus", "Andri", "Maulana", "Sukma");
    $index;
    for ($i=0; $i < 4; $i++) { 
    	if($mahasiswa[$i] === "Maulana"){
    		$index = $i;
    		break;
    	}
    }

    echo "Maulana terdapat pada index ".$index;

?>