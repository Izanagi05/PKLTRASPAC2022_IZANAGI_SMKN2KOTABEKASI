<?php
class Produk {

    private  $judul,
            $penulis,
            $penerbit;

    public $diskon=0;
    private $harga;


    public function __construct($judul1 = "Judull", $penulis1 = "Penulis", $penerbit1 = "Penerbit", $harga1= "Rp". 000){

        $this->judul = $judul1;
        $this->penulis = $penulis1;
        $this->penerbit = $penerbit1; 
        $this->harga = $harga1;
    }
    public function setjudul($setjudul){
        $this->judul=$setjudul;
    }
    public function getjudul(){
        return $this->judul;
    }
    public function setpenulis($setpenulis){
        $this->penulis= $setpenulis;
    }
    public function getpenulis(){
        return $this->penulis;
    }
    public function setpenerbit($setpenerbit){
        $this->penerbit=$setpenerbit;
    }
    public function getpenerbit(){
        return $this->penerbit;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getharga(){
        return $this->harga - ($this->harga * $this->diskon  / 100);
    }
    
    public function getdetailproduk(){
        $str = "$this->judul, ". $this->getlabel() ." Rp. $this->harga";
        return $str;
    }

    // public function setdiskon($diskon1){
    //     $this->diskon = $diskon1;
    // }

}


class Komik extends Produk {//child class
    public  $jumlahhalaman;
    

    public function getdetailproduk(){
        $str = "Komik: ". parent::getdetailproduk() ." $this->jumlahhalaman Halaman"; 
        return $str;
    }

    public function __construct ($judul1 = "Judul", $penulis1 = "Penulis", $penerbit1 = "Penerbit", $harga1= 000, $jumlahhalaman1= "-"){
        parent::__construct($judul1, $penulis1, $penerbit1, $harga1);

        $this->jumlahhalaman =$jumlahhalaman1;
    }
    public function setdiskon($diskon1){
        // parent::setdiskon($diskon1);
        $this->diskon = $diskon1;
    }
    public function getdiskon(){
        return " diskon sebesar: ". $this->diskon;
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

    public function setdiskon($diskon1){
        // parent::setdiskon($diskon1);
        $this->diskon = $diskon1;
    }
}
// class Game extends Produk {

// }



class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "Produk: {$produk->judul} {$produk->getlabel()}, {$produk->penerbit} (Rp.{$produk->harga})";
        return $str;

    }

}

class Baru extends Produk{

}
// class CetakInfoProduk{
//     public function cetak(){
//         $str = "{$this->objek1->judul} {$this->objek1->getlabel()}, {$this->objek1->penerbit} (Rp.{$this->objek1->harga})";
//         return $str;

//     }

// }


$objek1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 , 100);
$objek2 = new Game("Uncharted", "Neil DruckMann", "Sony Computer", 250000 , 50);
$infoproduk1 = new CetakInfoProduk();

echo $objek1->getdetailproduk();
echo "<br>";
echo $objek2->getdetailproduk();

echo "<br>";
echo "<hr>";
// echo $infoproduk1->cetak($objek1);
echo $objek2->setdiskon(50);
echo $objek2->getharga();



echo "<hr>";
echo $objek2->setjudul("COC");
echo $objek2->getjudul();

echo "<hr>";

$obj3 = new Baru();

// $obj3->setdiskon(30);
// echo $obj3->getdiskon();
 echo $obj3->diskon=20;
?>