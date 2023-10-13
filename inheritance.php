<?php
class manusia{
     public $nama="Imam Mumtaz Affan";
     private $jenis_kelamin="Laki-laki";
     protected $asal="jepang";
     public $warna;

     public function baru(){
     	return $this->jenis_kelamin;
     }
     
     public function tenaga_power(){
     	return "Super Power";
     } 
}

class bule_super extends manusia{
    public $power;

	public function tenaga_super(){
		return "Super Seiya";
	}
}

class arab_super extends manusia{  
     public function baru1(){
          return $this->asal;
     } 
}


$superman = new manusia();
echo $superman->tenaga_power();
echo "<br/>";

$superman = new bule_super();
echo $superman->tenaga_super();
echo "<br/>";
echo $superman->nama;
echo "<br/>";

$superman = new arab_super();
echo $superman->baru();
echo "<br/>";
echo $superman->asal;
echo "<br/>";

?>