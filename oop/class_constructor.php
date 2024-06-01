<?php
  class Mahasiswa {
      public $nama;
      public $umur;
      
      public function __construct($nama, $umur){
        $this->nama = $nama;
        $this->umur = $umur;
      }

      public function setNama($nama){
        $this->nama = $nama;
      }      
      public function getNama(){
        return $this->nama;
      }      

      public function setUmur($umur){
        $this->umur = $umur;
      }      
      public function getUmur(){
        return $this->umur;
      }      
  }


  $mahasiswa1 = new Mahasiswa("Tubagus", 22);

  echo "Nama: " . $mahasiswa1->getNama();
  echo "<br>";
  echo "Umur: " . $mahasiswa1->getUmur();


?>
