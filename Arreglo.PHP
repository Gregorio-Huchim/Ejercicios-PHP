<?php
/*
Alumno: Gregorio de Jesus Huchim Ortiz.
Ejercicio 1: Crear un arreglo de la forma corta sobre los meses del año. Documentar el ejercicio.
*/

//Variable array
$Mes[0]="Enero";
$Mes[1]="Febrero";
$Mes[2]="Marzo";
$Mes[3]="Abril";
$Mes[4]="Mayo";
$Mes[5]="Junio";
$Mes[6]="Julio";
$Mes[7]="Agosto";
$Mes[8]="Septiembre";
$Mes[9]="Octubre";
$Mes[10]="Noviembre";
$Mes[11]="Diciembre";

//Imprimimos una definición
print 'Los nombres de los meses son: ';

//Ciclo for para imprimir el array
for($i=0; $i<11; $i=$i+1){
    echo $Mes[$i]. ",&nbsp";
}

//Imprimimos la ultima variable, para poder colocar el .
echo $Mes[11]. ".";
?>