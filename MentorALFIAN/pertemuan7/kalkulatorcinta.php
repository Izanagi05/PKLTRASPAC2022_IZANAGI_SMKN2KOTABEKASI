<?php
class Calon {

    protected  $namamu,
            $namapasangan,
            $cinta=0;

            public function __construct($namamu, $namapasangan){
                $this->namamu= $namamu;
                $this->namapasangan = $namapasangan;
            }
}

class Hitung extends Calon{
    private  $znmmu,
            $znmpsngn,
            $pisahnamamu,
            $kombinasi,
            $tes,
            $trulop="true love";
            // $acak;

    public function gett(){
    }
    public function kalkcinta(){
        $this->znmmu= strlen($this->namamu);
        $this->znmpsngn= strlen($this->namapasangan);
        $this->pisahnamamu = explode(" ", $this->namamu);
        $this->kombinasi = $this->namamu . $this->namapasangan;
        // $this->acak= rand($this->znmmu, $this->znmpsngn);
        

        // if ($this->znmmu >= $this->acak){
        //     $this->cinta = rand(70, 100);
        // }elseif($this->znmmu <= $this->acak){
        //     $this->cinta = rand(10, 69);
        // }elseif($this->znmpsngn >= $this->acak){ 
        //     $this->cinta = rand(10, 69);
        // }elseif($this->znmpsngn <= $this->acak){
        //     $this->cinta = rand(70, 100);
        // }

        if ($this->znmmu >= $this->znmpsngn){
            // for($j=0; $j<strlen($this->kombinasi); $j++){
            //     if($this->kombinasi)
            // }
            
            // while(strlen($this->kombinasi) >= $this->i){
            //     $this->i++;
            // }
            $this->tes= strlen( $this->namamu) / strlen($this->kombinasi) *100 ;
            $this->cinta = round($this->tes);
        }elseif($this->znmmu <= $this->znmpsngn){
            $this->tes= strlen( $this->namapasangan) / strlen($this->kombinasi) *100;
            $this->cinta = round($this->tes,1);
                // $this->cinta = 10;
            }else{
                $this->cinta=0;
            }
            // echo $this->kombinasi;
        // for($k=0; $k<strlen($this->kombinasi); $k++){
        //     // echo $this->kombinasi[$k];  
        //     // for($t=0; $t<count($this->trulop); $t++){

        //     if($this->kombinasi[$k] === $this->trulop[0]){
        //         $this->cinta = 90;
        //     }else{
        //         // echo"tes";
        //         $this->cinta = 10;
        //     }
        // // }
        // }
        return $this->cinta;
    }
    public function gethasilcalon(){
        $hs ="Cinta antara ". $this->namamu." dan ".$this->namapasangan. " adalah " .$this->kalkcinta(). " persen Cinta";
        return $hs;
        // return count($hs);
    }
    public function setnamamu($snamamu){
        $this->namamu = $snamamu;
    }
    public function setnamapasangan($nmpasangan){
        $this->namapasangan =$nmpasangan;
    }
    public function getnamamu(){
        return $this->namamu;
    }
    public function getnamapasangan(){
        return $this->namapasangan ;
    }
}
// class tes{
// public $tes;

// public function tes(){
//     $go=$this->tes = "halo halo halo";
//     $h = strlen($go);
//     return $h;

// }
// }
$hasil = new Hitung("", "");
echo $hasil->setnamamu("iza");
echo $hasil->setnamapasangan("kamuu");
echo $hasil->gethasilcalon();
echo"<br>";
// echo $hasil->jum();
echo"<br>";
// $tess= new tes();
// echo $tess->tes();
// echo $hasil->kalkcinta();




?>