<?php

function hitung_prima($bilangan){
  $i = 2;
  $count = 0;
  $prima = array();
  while($count < $bilangan){
    $bil = $i;
    $bil_prima = true;
    for($j= 2; $j<$bil; $j++){
      if($bil%$j== 0){
        $bil_prima = false;
      }
    }
    if($bil_prima == true){
      //echo $bil.' adalah bilangan prima <br>';
      array_push($prima,$bil);
      $count = $count+1;
    }
    $i++;
  }
  return $prima;
}

$prima = hitung_prima(20);
print_r($prima);

 ?>
