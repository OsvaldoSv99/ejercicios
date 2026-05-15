<?php
$nums = [2,7,11,15];
$target = 18;

foreach ($nums as $key => $value) {
    foreach ($nums as $key2 => $value2) {
        if (($value != $value2) && (($value + $value2) == $target)) {
            echo $key . ' ' . $key2;
            return;
        }
    }
}

?>