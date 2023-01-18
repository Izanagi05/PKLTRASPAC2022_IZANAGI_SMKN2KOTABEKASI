<?php


class Contoh{
    public static $angka = 1;

    // public static function halo(){
    //      return     "haloo". self::$angka++. "kali";
    // }

    public function halo(){
         return  "haloo".self::$angka++. "kali";
    }
    public static function get(){
         return  "get";
    }
}

// echo Contoh::$angka;
// echo "<br>";
// echo Contoh::halo();
// echo "<br>";
// echo Contoh::halo();
// echo "<br>";
// echo Contoh::halo();
// echo "<br>";

echo Contoh::get();
echo "<br>";

echo "<hr>";
$objek = new Contoh;

echo $objek->halo();
echo "<br>";
echo $objek->halo();
echo "<br>";
echo "<hr>";
//-------
$objek2 = new Contoh;


echo $objek2->halo();
echo "<br>";
echo $objek2->halo();
echo "<br>";
echo $objek->halo();


?>
