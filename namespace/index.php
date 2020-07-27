<?php

require_once 'App/init.php';

// $produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 45000, 100);
// $produk2 = new Game("Dota 2", "Lord Gaben", "Valve", 250000, 50);

// $cetakProduk = new CetakInfoProduk;
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\service\User as serviceUser; 
use App\produk\User as produkUser;

new serviceUser();
echo "<br>";
new produkUser();
