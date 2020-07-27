<?php

//jual produk
//komik
//game
class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 45000);
$produk2 = new Produk("Dota 2", "Lord Gaben", "Valve", 250000 );
$produk3 = new Produk("Monster Hunter");

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();



