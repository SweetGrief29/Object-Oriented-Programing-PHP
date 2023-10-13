<?php
	class mobil{
		protected $pemilik="anto";

		function pemilik(){
			return $this->pemilik;
		}
	}
	$mobil_anto = new mobil();
	echo $mobil_anto->pemilik();
?>
