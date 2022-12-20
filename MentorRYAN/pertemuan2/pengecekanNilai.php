<?php 

$pengecekan=$_GET["angka"];



if($pengecekan < 31) {
    $hasil = "kurang";
} elseif ($pengecekan < 51) {
    $hasil = "Lumayan";
} elseif ($pengecekan < 76) {
    $hasil = "ya boleh lah";
}elseif ($pengecekan < 101) {
    $hasil = "mantap";
}else {
    $hasil = "diluar nalar coy";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Pengecekan Angka</h1>
        <form action="pengecekanNilai.php" method="get">
        <input type="number" name="angka" value="masukan angka">
        <input type="submit">
        </form>
        
    </div>
    <h1><?php echo $hasil; ?></h1>
    

</body>
</html>

