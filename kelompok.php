<?php
class orang{
	public $nama;
	public $nama1;
	public $nama2;
	
	function nama(){
		return $this->nama;
	}
	function nama1(){
		return $this->nama1;
	}
	function nama2(){
		return $this->nama2;
	}
	function __construct($nama,$nama1,$nama2){
		$this->nama=$nama;
		$this->nama1=$nama1;
		$this->nama2=$nama2;
	}
}

class hendy extends orang{
	function nama1(){
		$baru = "{$this->nama()}";
		return $baru;
	}
}

class ibnu extends orang{
	function nama2(){
		$baru = "{$this->nama1()}";
		return $baru;
	}
}

class imam extends orang{
	function nama3(){
		$baru = "{$this->nama2()}";
		return $baru;
	}
}

$baru = new orang("Hendy Akmadi","Ibnu Alif Ariski","Imam Mumtaz Affan");
$baru = new hendy("Hendy Akmadi","Ibnu Alif Ariski","Imam Mumtaz Affan");
$baru = new ibnu("Hendy Akmadi","Ibnu Alif Ariski","Imam Mumtaz Affan");
$baru = new imam("Hendy Akmadi","Ibnu Alif Ariski","Imam Mumtaz Affan");
?>