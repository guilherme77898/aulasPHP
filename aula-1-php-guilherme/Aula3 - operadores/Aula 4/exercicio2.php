<?php
//condicionais encadeadas
$idade = 75;

 if(($idade>= 16 && $idade < 18) || $idade >= 70){
    echo "Voto facultativo";
 }else if($idade >= 15 && $idade < 70){
    echo "Voto obrigatório";
 }else{
    echo"Não vota";
 }
 


?>