<?php
	class aritmatika{
		public $a;
		public $b;
		public $nama;

		function __construct($a,$b,$c){
			$this->a=$a;
			$this->b=$b;
			$this->nama=$c;
		}
		function hasil1(){
			$hasil1 =$this->a + $this->b;
			 return $hasil1;
			}
		function hasil2(){
			 $hasil2 =$this->a - $this->b;
			 return $hasil2;
			}
		function nama(){
        $nama= $this -> nama;
        return $nama;
			}
}
		$mtk1 =new aritmatika(12,32,"Nama=Hendy");
		echo "hasil penjumlahan";
		echo "</br>";
		echo "12+32";
		echo "</br>";
		echo "= " . $mtk1->hasil1();
		echo "</br>";

		$mtk2 =new aritmatika(34,43,"Nama=Hendy");
		echo "</br>";
		echo "hasil pengurangan";
		echo "</br>";
		echo "34-43";
		echo "</br>";
		echo "= " . $mtk2->hasil2();
		echo "</br>";
		echo $mtk2->nama();

	?>