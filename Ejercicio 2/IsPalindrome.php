<?php

$IsPalindrome = $_POST['name'];

//Primero debemos eliminar los espacios de la palabra que obtenemos del archivo form.php
$IsPalindrome = str_replace(" ", "", $IsPalindrome);

//Lo convertimos a minusculas para tener mayor control sobre el string
$IsPalindrome = strtolower($IsPalindrome);

//Con strrev invertimos la cadena para despues poderla comparar con la original
$StringReverse = strrev($IsPalindrome);

//Agregamos nuevamente los espacios a la palabra 
$StringReverse = str_replace("", " ", $StringReverse);

//Hacemos la comparacion
if($StringReverse == $IsPalindrome) {
    // echo "La palabra: [$IsPalindrome] si es Palindroma :D";
    echo "La palabra ".$IsPalindrome." si es Palindroma :D";
} else {
    echo "La palabra ".$IsPalindrome." no es Palindroma, lo siento crack D:";}
?>
