<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tfidf.php" method="post" name="formku" >

        <h1>Sistem pencari kata kunci super sederhana</h1>
        <textarea name="iberita" id="" cols="60" rows="6"></textarea>
        <input type="submit" name="proses"  id="k" value="Proses">
    </form>
    <h1></h1>

    <div id="tbnya">
        
     

    </div>
</body>

</html>



<?php

$iberita = $_POST['iberita'] ?? '';
$i=1;
$tolower = strtolower($iberita);
$strreplace = str_replace(['(', ')', '/',',','"','meng',':',';','0','1','2','3','4','5','6','7','8','9'], "", $tolower);
$pisahberita = explode(". ",$strreplace);
echo "<pre>". print_r($pisahberita). "</pre>"; 
if(isset($_POST['proses'])){

    if( $iberita){
        echo "<h3>Teks Asli</h3>";
        echo $iberita . "<br><br>"; 
        
        echo "<h3>Teks pisah</h3>";
        echo "<table border='1' id='rowtb'>";
        echo "  
            <tr>
            <th>NO </th>
            <th>Kalimat Bersih </th>
            <th>Kata Kunci</th>
            <th>Poin Kata Kunci</th>
            </tr>
            ";
            $semuakata = explode(" ", $strreplace);
            $arraycountval= array_count_values($semuakata);
            echo"<br>";
            echo"<br>";
            $jmlkalimat=count($pisahberita); 
            for($k=0; $k<count($pisahberita); $k++){
                
                // foreach ($pisahberita as $pb){
                    $dpisah = $pisahberita[$k];
                    $expdpsh= explode(" ", $dpisah);
                echo"<tr>";
                echo "<td>";
                echo $i++;
                echo "</td>";
                echo"<td>";
                echo $dpisah."<br>";//kalimat bersih
                echo"</td>";
                // print_r($expdpsh);
                $arctval= array_count_values($expdpsh) ;
                //    print_r(array_values($arctval));
                $jmlkt=count($expdpsh); 
                $io= array_values($arctval);
                for ($m=0; $m<count($io); $m++){
                    //tf
                    $tf = $io[$m] /  $jmlkt;
                //    $ktatf= $tf;
                //    $ktatf=$expdpsh[$m];
                    echo"<br>";
                    print_r(array_keys($arctval));
                }
                $arval=array_values($arraycountval); 
                 $arg = $jmlkalimat / $arval[$k];
                 $idf= log10($arg);
                 //tf.idf
                 $poinkt=$tf * $idf;
                for($r=0; $r<count($expdpsh); $r++){
                    // $katakunci = array_values($tf);
                    $katakunci = $tf;
                }
                echo "<td>";
                echo  $katakunci; //katakunci
                echo "</td>";

                echo "<td>";
                    echo $poinkt;//point kata kunci
                    
                }
                echo "</td>";
                echo"</tr>";
                echo "</table>"; 

    
               
     
    }else{
        echo "teks kosong";
    }
}


?>