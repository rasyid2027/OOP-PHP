<!-- //inharitance (pewarisan) = variable dan method dari parent class bisa diwariskan ke child class nya
//sehingga ketika membuat child class tdk perlu membuat variable/method lagi jika yg ingin dibuat sama
//contoh pada baris 38 dan 46 -->

<?php


class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $wktMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-)";

        return $str;
    }


}

class Komik extends Produk{     //cara membuat child class yg inharitance dari parent nya(nama_child extends nama_parent)
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-) - {$this->jmlHalaman} Halaman.";
        
        return $str;    //didalam class komik ga ada variable judul,penulis,penerbit namun masih bisa mengakses variable tersebut
    }                   //karena inilah sifat inharitance = mewarisi
}

class Game extends Produk{      //cara membuat child class yg inharitance dari parent nya(nama_child extends nama_parent)
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-) ~ {$this->wktMain} Jam.";
        
        return $str;    //didalam class game ga ada variable judul,penulis,penerbit namun masih bisa mengakses variable tersebut
    }                   //karena inilah sifat inharitance = mewarisi
}


class CetakInfoProduk {

    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        
        return $str;
    }

}

$produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 45000, 100, 0);
$produk2 = new Game("Dota 2", "Lord Gaben", "Valve", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();





