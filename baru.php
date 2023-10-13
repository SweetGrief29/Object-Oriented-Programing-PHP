<?php
class rangka{
	public $warna,
	       $merek,
	       $jenis,
	       $harga,
	       $pemilik,
	       $jumlah,
	       $tipe;

	public function __construct($warna,$merek,$jenis,$harga,$tipe,$l,$x){
	$this->warna=$warna;
	$this->merek=$merek;
	$this->jenis=$jenis;
	$this->harga=$harga;
	$this->tipe=$tipe;
    $this->pemilik=$l;
	$this->jumlah=$x;
	}
	public function tampil(){
	      return "$this->warna,$this->merek";
	}
}

class mewah extends rangka{

	public function lengkap(){
	      $str="mewah = {$this->tampil()} {$this->jenis} {$this->harga} {$this->pemilik}";
	return $str;
	}
}

class jadul extends rangka{

	public function lengkap(){
	    $str="jadul = {$this->tampil()} {$this->jenis} {$this->tipe} {$this->jumlah}";
	return $str;
	}
}

$mobil1 = new mewah("hijau","toyota","mini bus",200000,0,"hendy",24);
$mobil2 = new jadul("kuning","avanza","sedan",0,"g30","hendy",24);

echo $mobil1->lengkap();
echo "<br/>";
echo $mobil2->lengkap();
?>