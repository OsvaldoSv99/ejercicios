<?php
$palabra = "anita lava la tina";
// $palabra = "hola que hace";

$cadena = str_replace(' ','',$palabra);
$letras = str_split($cadena);
$reversa = array_reverse($letras);

if ($letras === $reversa) {
    echo $palabra . " es un palindromo";
}else{
    echo $palabra . " no es un palindromo";
}
?>