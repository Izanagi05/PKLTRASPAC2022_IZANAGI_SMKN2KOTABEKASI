
<?php  

class Spinner {

  private   $isi,
            $mtran,
            $acakk;

  public function __construct(...$kata) {
    $this->isi = $kata;
  }
  public function spin() {
    // return $this->isi[array_rand($this->isi)];
    // echo $this->isi=$this->isi[mt_rand(1, 4)] ;
  //   return ;
       shuffle($this->isi);
    }
  public function tampil($max) {
        // print_r( $this->isi[$jmlmuncul]);
      for($i=0; $i< $max; $i++){
          $this->acakk =  $this->isi[$i]; 
          echo $this->acakk. " ";
        }
        // return $this->mtran = mt_rand($minimal, $maximal);
    }
  
  
}

$pick = new Spinner("delshady", "oliv", "reva", "izanagi", "nadhifal");
echo "Hasil Terpilih:\n";
$pick->spin();
echo $pick->tampil(4);
echo "<br><br>";
echo '
<form action="kalkulatorspiner.php">
<button>Spin</button>
</form>';

?>