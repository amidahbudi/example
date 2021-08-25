<?php
$bil = 8;

$bil_prima = true;
for($i = 2; $i< $bil; $i++){
  if($bil%$i == 0){
    $bil_prima = false;
  }
}

if($bil_prima == true){
echo  $bil.' adalah bilangan prima';
}else{
  echo  $bil.' bukan bilangan prima';
}

 ?>
