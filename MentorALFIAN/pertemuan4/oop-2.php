<?php
class Produk {

    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul1 = "Judul", $penulis1 = "Penulis", $penerbit1 = "Penerbit", $harga1= "Rp". 000){

        $this->judul = $judul1;
        $this->penulis = $penulis1;
        $this->penerbit = $penerbit1; 
        $this->harga = $harga1;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
    
    public function getdetailproduk(){
        $str = "$this->judul, ". $this->getlabel() ." Rp. $this->harga";
        return $str;
    }

}


class Komik extends Produk {//child class
    public  $jumlahhalaman;

    public function getdetailproduk(){
        $str = "Komik: ". parent::getdetailproduk() ." $this->jumlahhalaman Halaman"; //overriding
        return $str;
    }

    public function __construct ($judul1 = "Judul", $penulis1 = "Penulis", $penerbit1 = "Penerbit", $harga1= 000, $jumlahhalaman= "-"){
        parent::__construct($judul1, $penulis1, $penerbit1, $harga1);

        $this->jumlahhalaman =$jumlahhalaman;
    }
}
class Game extends Produk {//child class
    public  $waktuMain;

    public function getdetailproduk(){
        $str = "Komik: ". parent::getdetailproduk() ." $this->waktuMain Jam";
        return $str;
    }

    
    public function __construct ($judul1 = "Judul", $penulis1 = "Penulis", $penerbit1 = "Penerbit", $harga1= "Rp" . 000, $waktuMain= "-"){
        parent::__construct($judul1, $penulis1, $penerbit1, $harga1);
        $this->waktuMain = $waktuMain;
    
        }
}
// class Game extends Produk {

// }


$objek1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 , 100);
$objek2 = new Game("Naruto", "Masashi Kishimoto", "Shonen Jump", 250000 , 50);

echo $objek1->getdetailproduk();
echo "<br>";
echo $objek2->getdetailproduk();
?>