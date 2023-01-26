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
            print_r  ($arraycountval);
            echo"<br>";
            echo"<br>";
            for($k=0; $k<count($pisahberita); $k++){
                
                $jjjj = $pisahberita[$k];
                
                
                // print_r ($jjjj);
                // for($y=0; $y<count($kkk); $y++){
                    $kkk = explode(" ", $jjjj);
                    $countkkk= count($kkk);
                    
                    $arctval= array_count_values($kkk) ;
                    
                    // }
                    $lll = count($arctval) / $countkkk;
    
               
                print_r  ($lll);
            }
     
            
        
        $katakunci = "katakunci";
        $pointkata = "tes";
        foreach ($pisahberita as $pb){
            echo"<tr>";
        echo "<td>";
        echo $i++;
        echo "</td>";
        echo"<td>";
        echo $pb."<br>";
        echo"</td>";
        echo "<td>";
       echo  $katakunci;
       
       echo "</td>";
       echo "<td>";
       echo  $pointkata;
        echo "</td>";
        echo"</tr>";
    }
        echo "</table>";



        // echo strtolower($iberita);
    }else{
        echo "teks kosong";
    }
}


?>