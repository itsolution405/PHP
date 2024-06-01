<?php
  class Mahasiswa {
      public $nama;
      protected $umur;
      private $alamat;      

      public function setUmur($umur){
        $this->umur = $umur;
      }      
      public function getUmur(){
        return $this->umur;
      }    

      public function setAlamat($alamat){
        $this->alamat = $alamat;
      }      
      public function getAlamat(){
        return $this->alamat;
      }      
            
  }

  $mahasiswa1 = new Mahasiswa();

  $mahasiswa1->nama = "Tubagus";
  $mahasiswa1->setUmur(22);
  $mahasiswa1->setAlamat("Bandung");

  echo $mahasiswa1->nama."<br>";
  echo $mahasiswa1->getUmur()."<br>";
  echo $mahasiswa1->getAlamat()."<br>";


?>
