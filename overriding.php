//overriding = memungkinkan kita untuk membuat method yg sama dengan parent class nya
//sehingga kita dapat mengeksekusi method yg kita maksudkan methodnya parent.
//contoh pada baris 39, 45, 55, 61.

<?php


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

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-)";

        return $str;
    }


}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);   //cara melakukan overriding dengan cara menulis (parent::nama_method)

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";    //cara melakukan overriding dengan cara menulis (parent::nama_method)
        
        return $str;
    }
}

class Game extends Produk{
    public $wktMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);   //cara melakukan overriding dengan cara menulis (parent::nama_method)

        $this->wktMain = $wktMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->wktMain} Jam.";    //cara melakukan overriding dengan cara menulis (parent::nama_method)
        
        return $str;
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





