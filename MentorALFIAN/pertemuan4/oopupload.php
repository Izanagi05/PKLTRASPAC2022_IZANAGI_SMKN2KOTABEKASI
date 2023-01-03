
<?php
class upload {
    
    public  $file,
            $tanggal,
            $tmp,
            $lokasi,
            $kliksimpan,
            $keterangan,
            $kettgl;

    public function uploadd($file1, $tanggal1, $tmp1, $lokasi1, $kliksimpan1){

        $this->file = $file1;
        $this->tanggal = $tanggal1;
        $this->tmp = $tmp1;
        $this->lokasi = $lokasi1;
        $this->kliksimpan = $kliksimpan1;



        if($_POST){
                    if($this->file && $this->tanggal ){
                        move_uploaded_file($this->tmp, $this->lokasi.$this->file);
                        $this->keterangan = " <script>alert('Berhasil Upload');</script>";
                        $this->kettgl =  "anda upload pada :" . $this->tanggal;
                    }else{
                        $this->keterangan = "<script>alert('Gagal Upload');</script>";
                        $this->kettgl =  "<script>alert('Isi tanggal dengan benar');</script>";
                    }
                }
    }
}
$objek1 = new upload();
 echo $objek1->uploadd( $_FILES['file']['name'] ??'', $_POST['tanggal'] ?? '', $_FILES['file']['tmp_name']??'', "lokasiupload/", $_POST['simpan']??''); 

?>
<script></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?php  echo $objek1->keterangan  ;?></p>
<p><?php  echo $objek1->kettgl;?></p>
    
<form action="oopupload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="date" name="tanggal" id="">
    <input type="submit" value="Upload" name="simpan">

    <button type="submit"> Submit</button>
</form>
</body>
</html>
