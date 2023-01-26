


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="foto">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
        <img src="kue.png" height="100px" alt="">
    </div>
    <h1>Sistem pengurut angka super sederhana</h1>
<div>

    <button class="tambah">Tambah</button>
    <button class="kurang" >Kurang</button>
</div>
<div>

    <input type="submit" class="tambahfilter" value="Tambah Filter">
    <input type="submit" class="kurangifilter" value="Kurangi FIlter">
</div>
          
    
    <form action="insertinnerjs.php" method="post">

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
              


                <tr id ="lll">
                    <td id="tbhkrgfilter" >

                <div >
                        <input type="checkbox" name="cekkotak[]" id="cekkotakk" value="dicek">
                        <label for="cekkotakk" id="idlabel">Filter tampil hanya yang</label>
                        <select name="pilihfilter[]" id="selectid" >
                            <option  value="lebihbesardari">></option>
                            <option   value="lebihkecildari"><</option>
                        </select>
                        <input type="number" name="angkafilter[]">
                    </div>

                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" name="cekawali" id="cekawali">
                        <label for="cekawali" id="ckawali">Awali dengan kata: </label>
                        <input type="text" name="awalidengan">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" name="cekgabung" id="cekgabung">
                        <label for="cekgabung" id="ckgabung">Gabungkan dengan pemisah: </label>
                        <input type="text" name="pemisah" id="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="proses">
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


//------------------

        var tbhfilter = document.querySelector(".tambahfilter");
        tbhfilter.addEventListener("click", tambahfilter);
        
        var krgfilter = document.querySelector(".kurangifilter");
        krgfilter.addEventListener("click", kurangfilter);

        function tambahfilter(){
        var barisfilter= document.querySelector('#tbhkrgfilter');//id td nya
        var divfilter = `<div>
                        <input type="checkbox" name="cekkotak[]" id="cekkotakk" value="dicek">
                        <label for="cekkotakk" id="idlabel">Filter tampil hanya yang</label>
                        <select name="pilihfilter[]" id="selectid" >
                            <option  value="lebihbesardari">></option>
                            <option   value="lebihkecildari"><</option>
                        </select>
                        <input type="number" name="angkafilter[]">
                    </div>`;
        barisfilter.insertAdjacentHTML("beforeend", divfilter);
        }

    
        function kurangfilter(parent){
            // var $filter= document.getElementById('selectid[]');
            var barisfilter= document.querySelector('#tbhkrgfilter');
            barisfilter.removeChild(barisfilter.lastChild);
   
            
        }



        

        
    </script>





</body>
</html>
<?php



if (isset($_POST['urutkan'])){

    $hasilinput = $_POST['inputangka'];
    $hasilurutan = $_POST['urutan'];
    
    $cekkotak = $_POST['cekkotak'] ??"";
    $pilihfilter = $_POST['pilihfilter']??"";
    $angkafilter = $_POST['angkafilter']??"";
    $cekawali = $_POST['cekawali']??"";
    $awalidengan = $_POST['awalidengan']??"";
    $cekgabung = $_POST['cekgabung']??"";
    $pemisah = $_POST['pemisah']??"";

    
    if ($hasilurutan === "kecil-besar" ){
        sort($hasilinput);
    }else{
            rsort($hasilinput);
        }

    if ($cekkotak){
        for($i=0; $i < count($cekkotak); $i++){
            $pilihfilter1 = $pilihfilter[$i] ;
            $angkafilter1 = $angkafilter[$i];

            $fungsinya =  function ($kkk){
                global $pilihfilter1, $angkafilter1;
                
                if($pilihfilter1 === 'lebihbesardari'){
                    return $kkk > $angkafilter1;
                }elseif($pilihfilter1 === 'lebihkecildari'){
                    return $kkk < $angkafilter1;
                }
            };
            $arayfilter = array_filter($hasilinput, $fungsinya);

        }
    }

    if ($cekawali) {
    $awali= function($l)  {
        global $awalidengan;
        if (($awalidengan) ==0) {
            return $strArray;
        }
        return $awalidengan.$l;
    };
    $map = array_map($awali, $arayfilter);

    
}

if($cekgabung){

    $gabungkan = implode($pemisah, $map);
        
}




   
    
    
      }
// print_r ($gabungkan ?? '');     
echo $gabungkan ?? '';
?>  