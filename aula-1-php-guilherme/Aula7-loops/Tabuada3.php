<?php 

    $numero = 5;
    $contador = 1;
    $res;

    do{
        $res = $numero * $contador;
        echo "{$numero} X {$contador} = {$res}\n";
        $contador++;   
    }   while($contador <= 10);



?>