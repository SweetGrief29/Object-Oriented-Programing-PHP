
<?php
class buku{
	public  $judul="kunci kesuksesan";
	public  $karangan="Hendy Akmadi";
	public  $penerbit="Erlangga";
	public  $jumlah=45;

function umum(){
	return $this->karangan;
	echo "<br>";
	$this->penerbit;
}
function novel(){
	}
}
	$produk1=new buku();
	echo $produk1->judul;
	echo "<br>";
	echo $produk1->judul="ikan julung-julung" ;
	echo"<br>";
	echo $produk1->umum();
	echo"<br>";
	$produk2=new buku();
	echo $produk2->karangan;
?>
