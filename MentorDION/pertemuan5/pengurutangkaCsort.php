<!-- pengurut angka dengan counting sort -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sistem pengurut angka super sederhana</h1>
<div>

    <button class="tambah">Tambah</button>
    <button class="kurang" >Kurang</button>
</div>
    
    <form action="pengurutangkaCsort.php" method="post">

            <table>
                
                <tr>
                    <td id="kolom">
                        <input type="number" id="kolominput" name="inputangka[]">
                    </td>
                </tr>
                <tr>
                    <td>
                    <select name="urutan" id="pilihan">
                        <option value="kecil-besar">kecil-besar</option>
                        <option value="besar-kecil">besar-kecil</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="urutkan">
                    </td>
                </tr>
            </table>
    </form>


    <script>
        var kliktambah = document.querySelector(".tambah");
        kliktambah.addEventListener("click", tambah);

        var klikkurang = document.querySelector(".kurang");
        klikkurang.addEventListener("click", kurang)

        function tambah(){
            var kolom= document.getElementById('kolom');
            var kolominput = document.createElement('input');
            kolominput.setAttribute("type", "number");
            kolominput.setAttribute("name", "inputangka[]");

            kolom.appendChild(kolominput);
        }
        function kurang(){
        
            var kolom= document.getElementById('kolom');
  
            
            kolom.removeChild(kolom.lastChild);
        }

        

        
    </script>





</body>
</html>
<?php
if (isset($_POST['urutkan'])){


// $test_array = array(3, 0, 2, 5, -1, 4, 1);
// echo "Original Array :\n";
// echo implode(', ',$test_array );
// echo "\nSorted Array\n:";
// echo implode(', ',counting_sort($test_array, -1, 5)). PHP_EOL;



    $hasilinput = $_POST['inputangka'];
    $hasilurutan = $_POST['urutan'];
    


    function counting_sort($hasilinput)
    {
        global $hasilinput; 
        $count = [];
        $n = max($hasilinput);
        $k = min($hasilinput);
      for($i =$k ; $i <=$n; $i++)
      {
          
          $count[$i] = 0;
         
          
      }
     
      foreach($hasilinput as $number)
      {
          //$count[$hasilinput[i]]
          $count[$number]++; 
          
      }
      $z = 0;
      for($i = $k; $i <=$n; $i++) {
        while( $count[$i]-- > 0 ) {
    
    
    $hasilinput[$z++] = $i;
    
}
}

return $hasilinput;

    }
    
    function counting_rsort($hasilinput)
    {
        global $hasilinput; 
        $count = [];
        $n = max($hasilinput);
        $k = min($hasilinput);
      for($i =$k ; $i <=$n; $i++)
      {
          
          $count[$i] = 0;
          
      }
     
      foreach($hasilinput as $number)
      {
          
          $count[$number]++; 
        
      }
      $z = 0;
      for($i = $n; $i >=$k; $i--) {
        while( $count[$i]-- > 0 ) {
    
    
    $hasilinput[$z++] = $i;
    
}
}

return $hasilinput;

    }



    if ($hasilurutan === "kecil-besar" ){
        // sort($hasilinput);
        counting_sort($hasilinput);
        
    }else{
            counting_rsort($hasilinput);
            // rsort($hasilinput);
        }

        foreach ($hasilinput as $hi){

            print_r ($hi);
           
        }
    // print_r($hasilinput);
      }


      
?>