<?php
//Convertir un string a un array
//explode(delimitador,string,limitador);
//Delimitador: Caracter por el cual queremos separar los valores
//String: se coloca el string que se haya determinado
//Limitador: se usa para limitar los valores que deseamos 
//https://www.youtube.com/watch?v=83bo9ddPIaA

$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha = explode("/", $fecha_1);

echo $array_fecha[0],"<br>";
echo $array_fecha[1],"<br>";
echo $array_fecha[2],"<br>";

$array_fecha = explode("-", $fecha_2);

echo $array_fecha[0],"<br>";
echo $array_fecha[1],"<br>";
echo $array_fecha[2],"<br>";

$array_numeros = explode(" ", $numeros);

echo $array_numeros[0],"<br>";
echo $array_numeros[1],"<br>";
echo $array_numeros[2],"<br>";
echo $array_numeros[3],"<br>";
echo $array_numeros[4],"<br>";
echo $array_numeros[5],"<br>";
echo $array_numeros[6],"<br>";


$array_numeros = explode(" ", $numeros,2);

echo $array_numeros[0],"<br>";
echo $array_numeros[1],"<br>";

// el limitador negativo no permite mostrar el ultimo caracter o palabra dependiente de la cantidad que se coloque -1 -2 -3 -4 etc
$array_numeros = explode(" ", $numeros,-1);

echo $array_numeros[0],"<br>";
echo $array_numeros[6],"<br>";




?>