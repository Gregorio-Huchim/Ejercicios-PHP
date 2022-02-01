<?php
/*
Alumno: Gregorio de Jesus Huchim Ortiz.
Ejercicio 1: Crear un arreglo de la forma corta sobre los meses del año. Documentar el ejercicio.
*/

//Variable array
$Mes = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

//Imprimimos una definición
print 'Los nombres de los meses son: ';

//Ciclo for para imprimir el array
for($i=0; $i<11; $i=$i+1){
    echo $Mes[$i]. ",&nbsp";
}

//Imprimimos la ultima variable, para poder colocar el .
echo $Mes[11]. ".";
?>