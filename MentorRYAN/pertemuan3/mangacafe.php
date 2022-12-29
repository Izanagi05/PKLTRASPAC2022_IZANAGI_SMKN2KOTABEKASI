<?php
$nama=$_POST['nama'] ??"";
$Usia=$_POST['umur'] ??"";
$waktu=$_POST['waktu'] ??"";
$keadaan=$_POST['keadaan'] ??"";


if($waktu < '14:00'){
    if( $Usia > 20 ){

        $status ="Boleh masuk";
    }else{
        $status="Tidak Boleh Masuk";
    }
    }else{
        if( $Usia < 20 || $Usia > 20  ){
            
            $status ="Boleh masuk";
        }else{

            $status="Tidak Boleh Masuk";
        }
    }

    
    if($keadaan ==='Sendiri'){
        $ruang="Privat";
    }elseif($keadaan === 'Perempuan'){
        $ruang="Publik";
    }else{
        $ruang="Publik & Privat";
    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek</title>
</head>
<body>
    

<form action="mangacafe.php" method="post">
    <input type="text" name="nama"  placeholder="Masukan Nama" required>
    <input type="number" name="umur"  placeholder="Masukan Usia" required>
    <input type="time" name="waktu"  placeholder="Masukan Jam Datang" required>
    <select name="keadaan">
        <option value=""></option>
        <option value="Sendiri">Sendiri</option>
        <option value="Laki-laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <input type="submit" value="Cek">


    <div>
        <h3>Nama: <?php echo $nama?> </h3>
        <h3>Usia:<?php echo $Usia . " Tahun"?> </h3>
        <h3>Jam Datang: <?php  echo $waktu?> </h3>
        <!-- <h3>Dengan: <?php  echo $keadaan?> </h3> -->
        <h3>Status: <?php echo $status?> </h3>
        <h3>Ruang: <?php echo $ruang ??''?> </h3>
    </div>


</form>
</body>
</html>