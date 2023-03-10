<?php
//Funcinoes para Mayúsculas y Minúsculas

$cadena_texto = "HOLA MUNDO"; 
$cadena_texto2 = "HOLA Mundo";
$cadena_texto3 = "hola mundo";
$cadena_texto4 = "hola mundo";

echo strtolower($cadena_texto),"<br>"; //strtolower Convierte todas las letras en minúsculas

echo strtoupper($cadena_texto2),"<br>"; //strtoupper Convierte todas las letras en mayúsculas

echo ucwords($cadena_texto3),"<br>"; //ucwords Convierte  las Iniciales en mayúsculas

echo ucfirst($cadena_texto4),"<br>"; //ucfirst Convierte  la primera inicial en mayúsculas

//Funciones para Contar Caracteres y Palabras de un String

$longitud = strlen($cadena_texto);

echo $cadena_texto. " tiene ".$longitud. " caracteres <br>";

$palabras = str_word_count($cadena_texto2);
echo $cadena_texto2. " tiene ".$palabras." palabras <br>";




?>