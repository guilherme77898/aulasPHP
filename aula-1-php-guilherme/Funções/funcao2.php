<?php
function calcularImc($peso,$altura){
    $imc = $peso/(pow($altura,2));
    return $imc;
}
function situação($imc){
    if($imc < 16){
        echo "O imc é: {$imc}. Situacao: Baixo peso";

    }else if($imc >= 16 && $imc <=25){
        echo "O imc é: {$imc}. Situacao: saudável";

    }else if ($imc > 25 && $imc < 29){
        echo "O imc é: {$imc}. Situacao: sobrepeso";
    }else{
        echo "O imc é: {$imc}. Situacao: sobrepeso";
    }
    
}
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc = calcularImc ($peso,$altura);
situacao($imc);

//debugar saber se a função está funcionando
$imc = calcularImc(99,1.80);
situação($imc);


?>