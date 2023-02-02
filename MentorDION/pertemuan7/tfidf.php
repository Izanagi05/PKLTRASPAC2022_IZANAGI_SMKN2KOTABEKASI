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
        
            <tr>
                <th>Kalimat Bersih </th>
                <th>Kata Kunci</th>
                <th>Poin Kata Kunci</th>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>

    </div>
</body>
<!-- <script>

var klikk = document.querySelector("#k"); 
        klikk.addEventListener("click", function (e){
            e.preventDefault();
            vldtb()
        });

function tbh(){
    
        var rowtb= document.querySelector('#rowtb');
        var table = `
        
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                </tr>`;
                    rowtb.insertAdjacentHTML("beforeend", table);
                };

                function vldtb(){
        var textarea = document.forms["formku"]["iberita"].value;
        if(textarea == null || textarea == ""){

            console.log("kosong");
        }else{

            console.log("tes");
        }
    }
</script> -->
</html>



<?php

$iberita = $_POST['iberita'] ?? '';
$i=1;
$tolower = strtolower($iberita);
$strreplace = str_replace(['(', ')', '/',',','"','meng',':',';','0','1','2','3','4','5','6','7','8','9'], "", $tolower);
$pisahberita = explode(". ",$strreplace);
echo "<pre>". print_r($pisahberita). "</pre>";
// echo count($pisahberita);
// $strreplace = str_replace("","", $pisahberita);
// $tes = str_replace(")", "", $pisahberita);
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
            // $arraycountval= array_count_values(array_unique($semuakata));
            // print_r  ($arraycountval); 
            echo"<br>";
            echo"<br>";
            // print_r($pisahberita);
            echo"<br>";
            // $kkk= explode(" ", $pisahberita);
            // foreach()
            $countkkk=count($pisahberita);
            $aoao=[];
            $katakunci = "katakunci";
            $pointkata = "tes";
            for($k=0; $k<count($pisahberita); $k++){
                
                // foreach ($pisahberita as $pb){
                    $jjjj = $pisahberita[$k];
                    $kkk= explode(" ", $jjjj);
                    // $arraycountva= array_count_values($kkk);
                    echo"<tr>";
                echo "<td>";
                echo $i++;
                echo "</td>";
                echo"<td>";
                echo $jjjj."<br>";
                echo"</td>";
                echo "<td>";
               echo  $katakunci;
               echo "</td>";
               echo "<td>";



                $arctval= array_count_values($kkk) ;
                $jmlkt=count($kkk);

                    $io= array_values($arctval);
                    // print_r($kkk);
                    for ($m=0; $m<count($io); $m++){
                        
                        $lll = $io[$m] /  $jmlkt;
                        // echo"<br>";
                    }
                    $arval=array_values($arraycountval);
                    // echo"<br>";  
                    //idf
                    // print_r($arval[$k]);
                    $arg = $countkkk / $arval[$k];
                    $kuncilognya= log10($arg);
                    $poinkt=$lll * $kuncilognya;
                    echo $poinkt;
                }
    
                echo "</td>";
                echo"</tr>";
                //    echo  $kuncilognya;
            // }
            echo "</table>";
                // print_r(count($arctval));
                
                // print_r(count($arctval));
                // }
                // }
                // print_r($kkk);
                // for($v=0; $v<count($pisahberita); $v++){

                    // print_r($yoooo[]);
                    // }
            // for($u=0; $u<count($arval); $u++){
                
            //     $arg = $countkkk / $arval[$u];
            //     //         // echo"<br>";
            //     echo "<br>";  
            // }
                
            //     $katakunci = "katakunci";
            //     $pointkata = "tes";
            //     foreach ($pisahberita as $pb){
            //         echo"<tr>";
            //     echo "<td>";
            //     echo $i++;
            //     echo "</td>";
            //     echo"<td>";
            //     echo $pb."<br>";
            //     echo"</td>";
            //     echo "<td>";
            //    echo  $katakunci;
               
            //    echo "</td>";
            //    echo "<td>";
            //    echo  $kuncilognya;
            //     echo "</td>";
            //     echo"</tr>";
            // }
            //     echo "</table>";
    
               
                    // print_r($arraycountval);
                    // $expval= explode(" ", $impval);
                    // print_r($expval);
                // for($w=0; $w<count($semuakata); $w++){
                    // $tfxidf= $lll * $lognya[$w];
                        // print_r($arval);
                // }
                // echo substr_count($kkk);
                // print_r($yoooo);
                // echo"<br>";

        // echo strtolower($iberita);
    }else{
        echo "teks kosong";
    }
}


?>