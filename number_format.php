<?php 

$cantidad_1 = 12732.77;
$cantidad_2 = 1931.81;

//number_format(cantidad, decimales, sep_decimal, sep_millar);

//opción 1
echo number_format($cantidad_1);

//Opción 2
$cantidad_1 = number_format($cantidad_1,2, ",",".");
echo $cantidad_1;

?>