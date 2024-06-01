<?php
  class Mahasiswa {
      public $nama;
      protected $umur;
      private $alamat;
  }

  class Mapres extends Mahasiswa{
      public $nama = "Akbar";
      protected $umur = 22;      
      public $prestasi = "Juara 1 Programming";

      public function showMahasiswa(){
        echo $this->nama."<br>";
        echo $this->prestasi."<br>";
        echo $this->umur."<br>";        
        echo $this->alamat."<br>";        
      }      
  }

  $mahasiswa1 = new Mapres();
 
  $mahasiswa1->showMahasiswa(); // Menampilkan Akbar, Juara 1 Programming, 22

  echo $mahasiswa1->nama."<br>";
  echo $mahasiswa1->prestasi."<br>";
  // echo $mahasiswa1->umur."<br>";
  echo $mahasiswa1->alamat."<br>";
?>


