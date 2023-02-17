<!-- CICLO FOREACH

https://www.youtube.com/watch?v=oK-AvqP_3QQ

Proporciona un modo sencillo de iterar sobre arrays. Foreach funcinoa sólo sobre arrays y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no incializada. Existen dos sintaxis:

1. Para recorrer los varoles
foreach($array as $valor){
    $valor tendrá en cada iteración un valor del array
}


2. Para recorrer la clave como los valores

foreach($array as $clave => $valor){
    $clave tendrá en cada iteración una clave del array 

    $valor tendrá en cada iteración un valor del array 
} -->


<?php
//Ejemplo 1
$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 4600H", "SSD 256GB", "RAM 24GB"];


foreach($laptop as $pc){
    echo $pc. "<br>";


}


//Ejemplo 2

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($frutas as $clave => $valor){
    echo  "Hay"." " .$valor. " " .$clave. " ". "en el inventario". "<br>";


}

//Ejemplo 3

$productos =[
    ["codigo" => "A0001", "descripcion"],



];


?>