<?php
// Dia de la semana - Dado un numero del 1 al 7, devuelve el día de la semana correspondiente

$dia=7;

$semana = [1 => "Domingo", 2 => "Lunes", 3 => "Martes", 4 => "Miercoles", 5 => "Jueves", 6 => "Viernes", 7 => "Sabado"];

if (is_null($dia) || $dia > 7) {
    echo "No Valido";
} else {
    print_r($semana[$dia]);
}
?>