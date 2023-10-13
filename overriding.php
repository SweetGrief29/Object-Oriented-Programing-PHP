<?php

class materi_overriding{
	public $nama,
	       $alamat,
	       $umur;

	public function __construct($nama, $alamat, $umur){
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->umur = $umur;
	}
	public function muncul(){
		$muncul = $this->nama . "<br/>" . $this->alamat . "<br/>" . $this->umur . "<br/>";
		return $muncul;
	}
}

class coba extends materi_overriding{
	public $kelas;

	public function __construct($nama, $alamat, $umur, $kelas){
		parent::__construct($nama, $alamat, $umur);
		$this->kelas = $kelas;
	}
	public function muncul(){
		$muncul = parent::muncul() . $this->kelas;
		return $muncul;
	}
}

$coba = new coba("Imam Mumtaz Affan", "Kajen", 16, "XI RPL");
echo $coba->muncul();

?>