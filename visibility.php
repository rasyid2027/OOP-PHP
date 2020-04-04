<?php


class Produk {
    public  $judul,                        //visibility public = bisa diakses dimanapun
            $penulis,
            $penerbit;

    protected $diskon;                     //visibility protected = hanya bisa diakses di PARENT class & CHILD class nya
            
    private $harga;                        //visibility private = hanya bisa diakses di PARENT class nya saja

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-)";

        return $str;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        
        return $str;
    }
}

class Game extends Produk{
    public $wktMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->wktMain = $wktMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->wktMain} Jam.";
        
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}


class CetakInfoProduk {

    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        
        return $str;
    }

}

$produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 45000, 100);
$produk2 = new Game("Dota 2", "Lord Gaben", "Valve", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();





