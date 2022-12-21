<?php



    // $kondisi = $_POST['angka'];

    // $sisabagi = $kondisi % 2;
    
    
    // if ($sisabagi == 0)
    // {
    //     $hasil = "Genap";
    // }elseif ($sisabagi == 1){
    //     $hasil ="ganjil";
    // }

    

    $kondisi = $_POST['angka'] ?? '';
    function kondisi($kondisi){

    $sisabagi = $kondisi % 2;
    
    // echo $sisabagi == 0 ? 'Genap' : 'Ganjil';
    $hasil = $sisabagi == 0 ? 'Genap' : 'Ganjil';
    
    return $hasil;
}









$pilihan = $_POST['pilihanmu'] ?? '';

function switchcase($pilihan){


switch ($pilihan) {
    case 1:
        $makanan = "Anda Memilih Nasi Goreng";
        break;
        
    case 2:
        $makanan = "Anda Memilih Ayam Goreng";
        break;
    case 3:
        $makanan = "Anda Memilih Nasi Uduk";
        break;
    case 4:
        $makanan = "Anda Memilih Ikan Bakar";
        break;
    case 5:
        $makanan = "Anda Memilih Bakso";
        break;
    default:
        $makanan = "Tidak ada pilihan";


    }
    return $makanan;
}




$j = 1;
function looping($j){


    while($j < 5) {
      echo "Ini loop ke: $j <br>";
      $j++;
    }
}






$hai="HALOOO";
$namadepan = $_POST['namadepan'] ?? 'default';
$namabelakang = $_POST['namabelakang'] ?? 'default';

function panggil($namadepan, $namabelakang){
    global $hai;
    echo "$hai ", $namadepan," ", $namabelakang;
}
?>