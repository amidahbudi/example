<?php
$kata = 'AMIDAH';
echo $kata.'<br>';
$len = strlen($kata)-1;
for($i = $len; $i>= 0; $i--){
echo substr($kata,$i,1);
}
?>
