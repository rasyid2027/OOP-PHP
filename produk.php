<?php

//jual produk
//komik
//game
class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

$produk1 = new Produk();
$produk1->judul = "One Piece";
$produk1->penulis = "Eichiro Oda";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 35000;

$produk2 = new Produk();
$produk2->judul = "Dota 2";
$produk2->penulis = "Lord Gaben";
$produk2->penerbit = "Valve";
$produk2->harga = 0;

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();


