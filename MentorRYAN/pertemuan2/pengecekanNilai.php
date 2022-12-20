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
    

</body>
</html>

<?php 

$pengecekan=$_GET["angka"];

if($pengecekan < 30) {
    $hasil = "kurang";
} elseif ($pengecekan < 50) {
    $hasil = "Lumayan";
} elseif ($pengecekan < 75) {
    $hasil = "ya boleh lah";
}elseif ($pengecekan < 100) {
    $hasil = "mantap";
}else {
    $hasil = "diluar nalar coy";
}



?>
<h1><?php echo $hasil; ?></h1>