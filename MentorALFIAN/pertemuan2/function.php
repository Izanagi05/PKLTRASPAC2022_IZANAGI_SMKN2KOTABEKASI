


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
    <form action="function.php" method="post">
    <input type="text" name="namadepan" placeholder="Nama depan">
    <input type="text" name="namabelakang" placeholder="Nama Belakang">
    <input type="submit">
    <h1> <?= panggil($namadepan, $namabelakang); ?></h1>

    </form>
</body>
</html>
