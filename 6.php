<?php

function deret_fibonacci($bil){
$bil = $bil-2;
$a = 0;
$b = 1;
$fibo = array();
array_push($fibo,$a);
array_push($fibo,$b);
for($i = 1; $i<= $bil; $i++){
  $c = $a+$b;
  array_push($fibo,$c);
  $a = $b;
  $b = $c;
}
return $fibo;
}

$fibo = deret_fibonacci(20);
print_r($fibo);
 ?>
