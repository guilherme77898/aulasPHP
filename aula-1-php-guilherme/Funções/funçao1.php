<?php

    //definição da função procedimento
         function soma($n1, $n2){
            $res = $n1+ $n2;
            echo"\nSoma: {$res}";
    }
    //chamada da função/invocação
    //definição da função
    function sub($num1,$num2){
        $res = $num1 - $num2;
        return $res;
    }


    function calcular($n1,$n2){
        echo "...O resultado da soma:";
        soma($n1,$n2);
        $resSub = sub($n1,$n2);
        echo"\n Subtracao: {$resSub}";
    }

    soma(2,1);
    soma(12,21);
    $retornoFunção = sub(5,2);
    echo"\n Retorno: {$retornoFunção}";
    calcular (10,4)

?>