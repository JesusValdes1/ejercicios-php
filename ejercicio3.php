<?php
/*Escribe un programa que imprima por pantalla 
los cuadrados (el numero multiplicado por si mismo)
de los 30 primeros números naturales
Modifica el ejercicio anteriro para que muestre al lado de
cada cuadrado si es un número par o impar*/
$cinco = 5;

for ($i = 1; $i <= 30; $i++){
    $cuadrado = $i*$i;
    echo "El cuadrado de ".$i." es ".$cuadrado;

    if($cuadrado % 2 == 0){
        echo " y es par";
    }else{
        echo " y es impar";
    }
    
    echo "<br/>";
}
?>