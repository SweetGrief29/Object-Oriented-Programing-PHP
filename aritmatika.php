<?php
class aritmatika{
		public $a;
		public $b;

		function __construct($a,$b){
			$this->a=$a;
			$this->b=$b;
		}
		function hasil1(){
			$hasil1 =$this->a + $this->b;
			 return $hasil1;
			}
		function hasil2(){
			 $hasil2 =$this->a - $this->b;
			 return $hasil2;
			}
		}
		$mtk1 =new aritmatika(12,32);
		echo "hasil penjumlahan";
		echo "</br>";
		echo "12+32";
		echo "</br>";
		echo "=".$mtk1->hasil1();

		$mtk2 =new aritmatika(34,43);
		echo "</br>";
		echo "hasil pengurangan";
		echo "</br>";
		echo "34-43";
		echo "</br>";
		echo "=".$mtk2->hasil2();
	?>



