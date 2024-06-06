<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Qual o nome:<input type="text" name="nome"></br>
        Qual seria seu peso ideal:<input type="text" name="numero"></br>
        Qual seria sua altura:<input type="text" name="numero"></br>
        <input type="submit" value="verificar">
    </form>
</body>
</html>

<?php
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = $peso / ($altura * $altura);
    //echo "{$numero}";

    echo "seu nome: "{.$nome};
    echo "seu peso: "{.$peso};
    echo "sua altura: "{.$altura};
    echo "seu IMC: "{.$imc};

    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 17.5 && $imc < 18.4){
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 30){
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 35){
        return "Obesidade Grau I";
    } elseif ($imc >= 35 && $imc < 40){
        return "Obesidade Grau II";
    } else {
        return "Obesidade Grau III";
    }
?>