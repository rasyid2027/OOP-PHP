<!-- static keyword = memungkinkan kita untuk mengakses property dan method tanpa meng instance class atau membuat objek dari class dulu
contoh ada pada baris 15, 17, dan 20 {
    //kita tidak perlu meng instance untuk mengakses method dengan static keyword(class::prop)
    //kita tidak perlu meng instance untuk mengakses property dengan static keyword(class::prop)
}
//apa guna nya???
//1. member yg terikat dengan class bukan dengan object
//2. nilai static akan selalu tetap meskipun object di instance berulang kali
// hapus comment code pertama dan comment code 2 untuk lihat syntax dengan static keyword -->

<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo" . self::$angka++ . "kali.";
//     }

// }

// echo ContohStatic::$angka; 
// echo "<br>";
// echo ContohStatic::halo(); 
// echo "<hr>";

// echo ContohStatic::halo();



class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>"; //ketika static maka
    }                                                    //$this->nama_prop diganti self::nama_prop
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

//ketika buat obj baru nilai prop ke reset
//lihat ketika prop menggunakan static keyword
//tambahkan static keyword untuk melihat hasilnya dengan static
//hapus static keyword untuk melihat hasilnya tanpa static

?>