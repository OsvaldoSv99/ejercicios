<?php 
$numeros = [4,80,1,20,3, 50];
$num= 0;
foreach ($numeros as $key => $value) {
    if ($value > $num) {
        $num = $value;
    }
}
echo $num;
?>