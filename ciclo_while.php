<!-- CICLO WHILE 
https://www.youtube.com/watch?v=Y4qTAU25YrM

La instrucción while (mientras) ejecuta una porción de programa mientras se cumpla una cierta condición.  

Mientras la condición sea verdadera, se ejecutan las intrucciones contenidas en while.

Cuando deja de cumplirse la condición, se sale del ciclo y se continúa ejecutando el resto del programa.

PHP 
while(Condición){
    código a ejecutar
}

PHP - HTML
while(Condición):
    código a ejecutar
endwhile; -->

<!-- Ejemplos
1. Diseñe un programa que imprima los numeros del 1 hasta el 20. (incremento y decremento) -->

<?php
//Incremento
// $c = 1;

// while($c <=20){
//     echo $c, "<br>";
//     $c++; 

// }
    
    //iteración es cuando repite el código, acá cada vez suma un número hasta que llegue a 20



//Decremento
// $d = 20;

// while($d >=1){
//     echo $d, "<br>";
//     $d--; 

// }


?>


<!-- 2. Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el 12 (incremento y decremento) -->

<?php

//Ascendente

$c = 1;
$num = 10;

while($c <=12){
    echo $num. " x ". $c. " = " .$num * $c. "<br>";
    $c++;
}

//Descendente

$c = 12;
$num = 5;

while($c >=1){
    echo $num. " x ". $c. " = " .$num * $c. "<br>";
    $c--;
}



?>




