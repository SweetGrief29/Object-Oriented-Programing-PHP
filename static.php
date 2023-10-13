<?php

class materi_static{
	public static $baru;
	const SAYA = 15;

	public static function setsaya($a){
    self::$baru = $a;
	}
	public static function getsaya(){
		return self::$baru;
	}
}

materi_static::setsaya("Imam Mumtaz Affan");
echo "Nama : " . materi_static::getsaya();

echo "<br/>";

define ('UMUR',16);
echo "Umur : " . UMUR;

echo "<br/>";

echo  "No Urut : " . materi_static::SAYA;

echo "<hr/>";

echo "Disimpan di " . __FILE__;
?>