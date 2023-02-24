INCLUDE & REQUIRE

Ambas funcinoes sirven para añadir otros ficheros a nuestros scripts en PHP.

INCLUDE:
Inserta en nuestro script un código procedente de otro archivo, si no existe dicho archivo o si contiene algún tipo de error nos mostrará un WARNING por pantalla y el script seguriá ejecuntándose.

include("ruta_archivo.php");
include"ruta_archivo.php";

include_once("ruta_archivo.php");
include_once "ruta_archivo.php";





REQUIRE:
Hace la misma operación que INCLUDE, pero en caso de no existir el archivo o error en el mismo mostrará un FATAL ERROR y el script no se sigue ejecutando.

require("ruta_archivo.php");
require"ruta_archivo.php";

require_once("ruta_archivo.php");
require_once "ruta_archivo.php";
