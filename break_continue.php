<?php
//https://www.youtube.com/watch?v=wD66uzr7YHQ
// $c = 1;
// while($c <=20){
//     echo $c. "<br>";
//     if($c == 10){
//         break; //detendrá el ciclo al llegar a 10 no importando que se haya colocado que fuera menor o igual a 20
//     }
//     $c++;
// }


//Continue
$pc=["SO","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
       if($componente == "GPU"){
        continue;
    }
    echo $componente. "<br>";

}

//Ciclo for
for($i = 1; $i <= 10; $i++){
    if($i == 5){
        continue;
    }
    echo $i. "<br>";

}

//While
$i = 1;
while($i <= 10){
    if( $i == 3){
        $i++;
        continue;
    }
    echo $i. "<br>";
    $i++;
}
