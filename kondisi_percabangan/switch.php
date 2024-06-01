<?php

    $nilai = 'I';

    switch (true) {
      case ($nilai === 'A' || $nilai === 'J'):
        echo "Predikat Nilai Sangat Baik";
        break;
      case ($nilai === 'B' || $nilai === 'I'):
        echo "Predikat Nilai Baik";
        break;
      // case 'C':
      //   echo "Predikat Nilai Cukup";
      //   break;
      // case 'D':
      //   echo "Predikat Nilai Kurang";
      //   break;
      default:
        echo "Predikat Nilai Sangat Kurang";
    }

?>