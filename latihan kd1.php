<?php
class mobil{
	public $merk;
	public $warna=" berwarna merah ";

		function maju(){
		}
		function mundur(){
		}
		function bergerak(){
			return "melaju kencang";
		}
	}
		$mobil= new mobil ();
		echo $mobil->bergerak();
		echo $mobil-> warna;
	?>



