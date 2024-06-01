<?php
	
  echo min(80, 90, 50, 55, 65) . "<br>";
  echo max(80, 90, 50, 55, 65);

  echo pi() . "<br>"; 

  echo abs(-5) . "<br>";  // returns 5
  echo abs(0). "<br>";  // returns 0
  echo abs(5) . "<br>";  // returns 5

  echo sqrt(64) . "<br>";  // returns 8
  echo sqrt(27). "<br>";  // returns 0  

  echo pow(8, 1/3) . "<br>";

  echo round(1.49). "<br>";  // returns 1
  echo round(1.50). "<br>";  // returns 0
  echo round(1.51). "<br><br>";

  // echo rand();

  echo rand(10,90);

?>