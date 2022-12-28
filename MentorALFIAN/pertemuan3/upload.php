

<?php
function upload(){

    $file = $_FILES['file']['name'] ??'';
    $tanggal = $_POST['tanggal'] ?? '';
$tmp =$_FILES['file']['tmp_name']??'';
$lokasi = "lokasiupload/";
$kliksimpan = $_POST['simpan']??'';


if($kliksimpan){
    if($file && $tanggal ){
        move_uploaded_file($tmp, $lokasi.$file);
        echo "berhasi Upload<br>";
        echo "anda upload pada :" . $tanggal;
    }else{
        echo "gagal upload<br>";
        echo  "Isi tanggal dengan benar";
    }
    
}



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
    
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="date" name="tanggal" id="">
    <input type="submit" value="Upload" name="simpan">

    <h1><?php echo upload(); ?></h1>
</form>
</body>
</html>
