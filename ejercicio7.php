<?php
/*Crear un array llamado meses y que almacene
el nombre de los doce meses del año.
Recorrerlo con FOR para mostrar por pantalla los 12 meses */

$meses = array("Enero", "Febrero","Marzo","Abril","Mayo",
"Junio","Julio","Agosto","Septiembre","Octubre",
"Noviembre","Diciembre");

foreach($meses as $mes){
    echo "El mes es: ".$mes."<br/>";
}

?>