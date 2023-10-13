<?php

define ('IMAM',15);
echo IMAM;
echo "<hr/>";

class imam{
     private $judul,
             $tahun_perilisan,
             $jumlah_episode;

     public function setjudul($a){
     	$this->judul = $a;
     }
     public function settahun($b){
     	$this->tahun_perilisan = $b;
     }
     public function setjumlah($c){
     	$this->jumlah_episode = $c;
     }

     public function getjudul(){
     	return $this->judul;
     }
     public function gettahun(){
     	return $this->tahun_perilisan;
     }
     
}

class saya extends imam{
	private $jumlah_episode;
public function getjumlah(){
     	return $this->jumlah_episode;
     }
}
$baru = new imam();
$baru->setjudul(" Naruto");
$baru->settahun(" 1987");
$baru->setjumlah(" 500");

echo "Judul Anime :" . $baru->getjudul();
echo "<br/>";
echo "Tahun Perilisan :" . $baru->gettahun();
echo "<hr/>";
echo IMAM;
echo "<hr/>";

$anime = new saya();
$anime->setjudul(" Naruto Uzumaki");
$anime->settahun(" 1997");
$anime->setjumlah(" 500");

echo "Judul Anime :" . $anime->getjudul();
echo "<br/>";
echo "Tahun Perilisan :" . $anime->gettahun();
echo "<br/>";
echo "Jumlah Episode  :" . $anime->getjumlah();
?>