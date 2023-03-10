
<?php

date_default_timezone_set("America/Guatemala");

// $fecha_us = date("Y/m/d");
// $fecha_es = date("d-m-Y");
// $hora_12 = date("h:i a");
// $hora_24 = date("H:i a");
// $fecha_completa = date("d-m-Y h:i A");
// $fecha_completa2 = date("l d F Y H:i A");

// echo $fecha_us, "<br>";
// echo $fecha_es, "<br>";
// echo $hora_12, "<br>";
// echo $hora_24, "<br>";
// echo $fecha_completa, "<br>";
// echo $fecha_completa2, "<br>";


//https://www.youtube.com/watch?v=rlxqbzqL-e0

//https://www.php.net/manual/es/timezones.php

//https://www.php.net/manual/es/function.date.php

//Fecha en Español
//https://www.youtube.com/watch?v=aA65PJBU8dY

//Fecha larga
// function fecha_espanol_larga()
// {

//     $fecha_dia = date("d");
//     $fecha_mes = date("m");
//     $fecha_year = date("Y");

//     $dia_semana = [
//         "Monday" => "Lunes",
//         "Tuesday" => "Martes",
//         "Wednesday" => "Miércoles",
//         "Thursday" => "Jueves",
//         "Friday" => "Viernes",
//         "Saturday" => "Sábado",
//         "Sunday" => "Domingo",

//     ];

//     $mese_year = [
//         "01" => "Enero",
//         "02" => "Febrero",
//         "03" => "Marzo",
//         "04" => "Abril",
//         "05" => "Mayo",
//         "06" => "Junio",
//         "07" => "Julio",
//         "08" => "Agosto",
//         "09" => "Septiembre",
//         "10" => "Octubre",
//         "11" => "Noviembre",
//         "12" => "Diciembre",

//     ];

//     $fecha_final = $dia_semana[date("l")]. " ".$fecha_dia." de " .$mese_year[$fecha_mes]. " de ".$fecha_year;

//     return $fecha_final;
// }
// echo fecha_espanol_larga();


//Fecha corta en español
function fecha_espanol_corta($fecha =" "){

    if($fecha ==" "){
        $fecha = date("d-m-Y");
    }else{
        $fecha = date("d-m-Y".strtotime($fecha));
    }

    //convertimos la variables en Array
    $fecha = explode("-",$fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];

    $mese_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre",

    ];

    $fecha_final = $fecha_dia." de " .$mese_year[$fecha_mes]. " de ".$fecha_year;

    return $fecha_final;
}
echo fecha_espanol_corta(); //si en caso lleva algún dato se coloca dentro del ()