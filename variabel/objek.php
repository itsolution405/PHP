<?php

	class Mahasiswa {
	  public $nama;
	  public $alamat;
	  public $umur;

	  public function __construct($nama, $alamat, $umur) {

	    $this->nama = $nama;
	    $this->alamat = $alamat;
	    $this->umur = $umur;
	  }

	  public function message() {
	    return "Hello Nama Saya " . $this->nama . " Saya berumur " . $this->umur;
	  }
	}

	$mhs1 = new Mahasiswa("Refdinal", "Bandung", 20);
	echo $mhs1 -> message();

	echo "<br>";

	$mhs2 = new Mahasiswa("Tubagus", "Cimahi", 22);
	echo $mhs2 -> message();

?>