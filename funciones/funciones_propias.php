<!-- Funciones (PROPIAS)

Una función es un conjunto de instruccciones a la que podemos recurrir siempre que queramos.
Éstas pueden recibir parámetros y realizar todo tipo de tareas, ya seaj complejas o sencillas.

Un nombre de función válido comienza con una letra o guión, seguido de cualquier número de letras, números o guiones bajos, no puede llevar simbolos especiales.

Ejemplos
function nombre_de_función($parametros){
    Código de la función
} -->

<?php

//https://www.youtube.com/watch?v=x5bFLJdvORk

//Ejemplo 1
// function saludo(){
//     echo "hola, mi nombre es Abimael", "<br>";
// }

// saludo();
// saludo();
// saludo();

// Ejemplo 2

// function saludo()
// {
//     return "Hola mi nombre es Abimael";
// }

// $saludo = saludo();

// echo $saludo;

//Ejemplo 3

// function saludo($nombre){
//     return "Hola mi nombre es: $nombre";
// }

// echo saludo("Nicole");

//Ejemplo 4
// function saludo($nombre){
//     return "Hola mi nombre es: $nombre";
// }

// echo saludo("Nicole");

// $usuario = "Ashley";
// echo saludo($usuario);

// echo saludo($nombre = "Carlos");


function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio = ($nota_1 + $nota_2 + $nota_3)/3;
    return $promedio;

}

// $promedio = promedio_alumno(7,9,6);

// echo "El promedio es:".$promedio;
//echo "El promedio es: ".promedio_alumno(7,8,6)


//Para utilizar un parámetro dentro de la función debemos de colocar exactamente el mismo nombre que hemos definido en los parámetros

?>