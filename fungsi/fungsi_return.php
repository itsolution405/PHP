<?php
	function averageGrade($grade1, $grade2, $grade3) {
		$average = ($grade1 + $grade2 + $grade3) / 3;

  		return $average;
	}

	$grade = averageGrade(90, 84, 75);

	echo "Rata-rata nilai = ".$grade; // output 83
?>