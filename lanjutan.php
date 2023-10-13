<?php
include "kelompok.php";
class kelompokku{
	function data(){
		echo "<br/>";
		echo "<br/>";
		echo " === Diatas adalah nama anggota kelompok kami ===";
	}
}
$data = new kelompokku();
echo $baru->nama();
echo "<br/>";
echo $baru->nama1();
echo "<br/>";
echo $baru->nama3();
echo $data->data();
?>