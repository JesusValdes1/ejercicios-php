<?php
/* Escribe un programa que multiplique los 20 primeros
números naturales. Utiliza el bucle while*/

$numero = 1;
$contador = 2;
while($contador <=20){
    $numero *= $contador;
    
    echo $numero."<br/>";

    $contador++;
}
echo "El resultado de multiplicar los 20 primeros números
es: ".$numero;
?>