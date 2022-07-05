<?php
     class bola{
          public $phi = 3.14; private $r = 15;
          /*function vbalok($l,$t,$p){
               $vol = $p*$l*$t;
               return $volbalok;
          }*/
          function vbola($r){
               $this -> r = $r;$p3 = $this-> r * $this-> r *$this-> r;
               $vol = 4/3 * $this-> phi*pow($r,3);
               echo 'volume = 4/3 x '.$this -> phi.' x '.$this->r.' <sup>3</sup> = '. ($vol).' Cm <sup>3</sup><br>';
          }
}
$bola = new bola;
$bola-> vbola($r);
if(isset($_GET['r'])){
     $r = $_GET['r'];
     echo "jari-jari = ".$r. "cm<br>";
     echo $bola->vbola($r);
     }
     
?>
<?php 
class balok{
     public $p; public $l; public $t;
          function vbalok($p,$l,$t){
               $this-> t = $t;  $this -> p = $p; $this -> l = $l;
               $vol = $p*$l*$t;
          echo "volume balok= ".$p." x ".$l." x ".$t." = ".$this->p * $this->l * $this->t." cm <sup>3</sup>";
               return $vol;
          }
          /*function balok($r){
               $vol = 4/3*$this->phi*pow($r,3);
               return $vol;
          }*/
     }
$balok = new balok;
$balok-> vbalok($p = 30,$l=20,$t=3);
if(isset($_GET['p,l,t'])){
     $r = $_GET['p.l,t'];
     echo "panjang = ".$p. "m<br>";echo "lebar = ".$l. "m<br>";echo "tinggi = ".$l. "m<br>";
     echo $balok->vbalok($p,$l,$t);
     }
 ?>
 <?php

class Mobil {
  public $name;
  public $color;
  public $bbm;
}
$mbl = new Mobil();
$mbl->name = 'Xenia';
$mbl->color = 'Hitam';
$mbl->bbm = 'bensin';

echo $mbl->name.' '.$mbl->color.' '.$mbl->bbm;

?>