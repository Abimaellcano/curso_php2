<!-- CILCO FOR 

La estructura repetitiva for (para) se utiliza generalmente cuando tenemos bien determinada la cantidad de repeticiones a realizar.
Se diferencia de las anteriores en que se debe incluir en la propia intrucción una variable de control, la cual se incrementa o decrementa de forma automática.

PHP
for(var;condición;incre|decre){
    Código a ejecutar
}

PHP / HTML 
for(var;Condición;incre|decre):
    Código a ejecutar
endfor; -->

<!-- Ejemplo 1
Diseñe un programa que imprima los números del 1 hasta el 20. (incremento y decremento) -->

<?php

for($i=1; $i <=20; $i++){
    echo $i. "<br>";

}

for($i=20; $i >=1; $i--){
    echo $i. "<br>";

}



// <!-- Ejemplo 2
// Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el 12. (incremento y decremento)
//  -->

$numero = 7;

for($i=1; $i <=12; $i++){
    echo $numero. " x " .$i." = " .$i * $numero. "<br>";
}


$numero = 8;

for($i=12; $i >=1; $i--){
    echo $numero. " x " .$i." = " .$i * $numero. "<br>";
}



?>