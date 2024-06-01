<?php
	function countIPK($result) { 
		$array = array(
		    "A" => 4,
		    "AB" => 3.5,
		    "B" => 3,
		    "BC" => 2.5,
		    "C" => 2,
		    "CD" => 1.5,
		    "D" => 1,
		    "E" => 0,
		);

		$sum = 0;
		$sum_sks = 0;
		$ipk = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$nilai = $array[$row['Nilai']];
			$mutu = $nilai * $row['SKS_Matkul'];

			$sum_sks = $sum_sks + $row['SKS_Matkul'];
			$sum = $sum + $mutu;
		}   
		
		if($sum_sks !== 0){
			$ipk = number_format($sum / $sum_sks, 2, '.', '');
		}    
        return array($ipk, $sum_sks);
    }

?>