<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto","Masashi Kishimoto11","Shonen Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);
// $cetakInfoKomik = new Komik;
// $cetakInfoGame = new Game;

$cetakProduk = new cetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();