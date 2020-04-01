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
        return "Judul: $this->judul <br>
                Penulis: $this->penulis <br>
                Penerbit: $this->penerbit <br>
                Harga: $this->harga";
    }


}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 45000);
$produk2 = new Produk("Dota 2", "Lord Gaben", "Valve", 250000 );
$produk3 = new Produk("Monster Hunter");

echo "Komik :" . "<br><br>" . $produk1->getLabel();
echo "<br><br>";
echo "Game :" . "<br><br>" . $produk2->getLabel();
echo "<br><br>";
echo "Game :" . "<br><br>" . $produk3->getLabel();


