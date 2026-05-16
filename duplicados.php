<?php
$cadena = [1,2,2,3,4,4];
$nueva=[];
foreach ($cadena as $key => $value) {
    if (in_array($value, $nueva)) {
    }else{
        $nueva[] = $value;    
    }
    
}

print_r($nueva);
echo '<br>';
print_r($cadena);
?>