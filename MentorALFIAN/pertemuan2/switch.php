<?php
include 'fungsi.php';

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
    <ul>
        <h1>Daftar Pilihan</h1>
        <li>1. Nasi Goreng</li>
        <li>2. Ayam Goreng</li>
        <li>3. Nasi Uduk</li>
        <li>4. Ikan Bakar</li>
        <li>5. Bakso</li>
    </ul>
    <form action="switch.php" method="post">
    <input type="text" name="pilihanmu">
    <h1><?php echo "Keterangan: " . switchcase("3" )  ?></h1>

    </form>
</body>
</html>