<?php
class datasiswa
{
    public  $nis,
            $nama,
            $kelas,
            $alamat; 

           
    public function __construct($nis1="kosong", $nama1="kosong", $kelas1="kosong", $alamat1="kosong"){
        $this->nis = $nis1; //this biar bisa manggil yang diatas
        $this->nama = $nama1;
        $this->kelas = $kelas1;
        $this->alamat = $alamat1;
    }
    public function panggilsemua(){
        echo "Nis Pelajar: $this->nis <br>" ;
        echo "Nama Pelajar: $this->nama <br>" ;
        echo "Kelas Pelajar: $this->kelas <br>";
        echo "Alamat Pelajar $this->alamat <br>";
    }

    public function __destruct(){
        echo "ini function distruct<br>";
    }


}
$objek1 = new datasiswa();
$objek1->nis="09999";
$objek1->nama="Iza";
$objek1->kelas="11 RPL";
$objek1->alamat="bekasi";
$objek2 = new datasiswa();
$objek2->nis="888";
$objek2->nama="orang2";
$objek2->kelas="10 RPL";
$objek2->alamat="dirumah";


var_dump($objek1);
echo "<br>";
var_dump($objek2);
echo "<br>";
echo "<br>";

 //__contruct otomatis berjalan jika objek dibuat
$objekconstructer1 = new datasiswa("123", "Izaa", "11 RPL", "Bekasi");
$objekconstructer2 = new datasiswa("456", "orang", "11 RPL", "Bandung");


echo $objekconstructer1->nama;// manggil dari parameter $nama1 yang argumennya Izaa
echo "<br>";
echo "<br>";
echo $objekconstructer2->panggilsemua();
echo "<br>";
// var_dump($objekconstructer1)




echo "<br>";
echo "<br>";
echo $objek1->nama;//manggil nama di objek  $objek1
echo "<br>";
// echo $objek1->panggilsemua();

?>