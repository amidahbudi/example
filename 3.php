<?php
$bilangan = 100;
$prima = '';
for($i= 2; $i<= $bilangan; $i++){
  $bil = $i;
  $bil_prima = true;
  for($j=2; $j<$bil; $j++){
    if($bil%$j==0){
      $bil_prima = false;
    }
  }
  if($bil_prima == true){
    $prima = $prima.$bil.',';
  }
}

echo $prima;

 ?>
