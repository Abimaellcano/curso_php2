<!-- CICLO DO-WHILE 
https://www.youtube.com/watch?v=TM4AssnhfKQ

La estructura repetitiva do-while (hacer - mientras) es muy similar a la estructura while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar de al principio.

Hay una sola sintaxis para bucles do-while. 

do{
    codigo a ejecutar
}while(condición)
 -->
<!-- 
 Ejemplo 1

 Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el 12. (incremente y decremento)  -->

<?php
//Ascendente
    // $c = 1;

    // do{
    //     echo $c. "<br>";
    //     $c++;

    // }while($c <=20);


//Descendente 

// $e = 20;

//     do{
//         echo $e. "<br>";
//         $e--;

//     }while($e >=1);






//  <!-- Ejemplo 2

//  Diseñe un programa que imprima la tabla de multiplicar de un número dado desde el factor 1 hasta el 12. (incremento y descremento) -->



$d=1;
$num=5;

do{
    echo $num. " x ", $d. " = ".$num * $d. "<br>";
    $d++;
}while($d <=12);


$d=12;
$num=5;

do{
    echo $num. " x ", $d. " = ".$num * $d. "<br>";
    $d--;
}while($d >=1);


// Acá el ciclo se detiene hasta que la condición de falso.



?>
