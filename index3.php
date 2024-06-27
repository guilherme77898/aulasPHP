<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Informe o salario atual:<input type="text" name="salario"></br>
        Informe o tempo de servico:<input type="text" name="servico"></br>
        <input type="submit" value="verificar">

    </form>
</body>

</html>

<?php
$salario = $_GET['salario'];
$servico = $_GET['servico'];


if ($salario <= 500) {
    $reajuste = $salario * 0.25;
    echo "O reajuste foi de: {$reajuste}";
    if ($servico >= 1 && $servico < 3) {
        $bonus = $reajuste + 100;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 1 && $servico <= 3) {
        $bonus = $reajuste + 200;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 3 && $servico <= 6) {
        $bonus = $reajuste + 300;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 6 && $servico <= 10) {
        $bonus = $reajuste + 500;
        echo "O salario com o bonus foi: {$bonus}";
    } else {

        echo "Não ganha bonus";
    }
} else if ($salario > 500 && $salario <= 1000) {
    $reajuste = $salario * 0.20;
    echo "O reajuste foi de: {$reajuste}";
    if ($servico >= 1 && $servico < 3) {
        $bonus = $reajuste + 100;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 1 && $servico <= 3) {
        $bonus = $reajuste + 200;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 3 && $servico <= 6) {
        $bonus = $reajuste + 300;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 6 && $servico <= 10) {
        $bonus = $reajuste + 500;
        echo "O salario com o bonus foi: {$bonus}";
    } else {

        echo "Não ganha bonus";
    }

} else if ($salario > 1000 && $salario <= 1500) {
    $reajuste = $salario * 0.20;
    echo "O reajuste foi de: {$reajuste}";
    if ($servico >= 1 && $servico < 3) {
        $bonus = $reajuste + 100;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 1 && $servico <= 3) {
        $bonus = $reajuste + 200;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 3 && $servico <= 6) {
        $bonus = $reajuste + 300;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 6 && $servico <= 10) {
        $bonus = $reajuste + 500;
        echo "O salario com o bonus foi: {$bonus}";
    } else {

        echo "Não ganha bonus";
    }
} else if ($salario > 1500 && $salario <= 2000) {
    $reajuste = $salario * 0.20;
    echo "O reajuste foi de: {$reajuste}";
    if ($servico >= 1 && $servico < 3) {
        $bonus = $reajuste + 100;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 1 && $servico <= 3) {
        $bonus = $reajuste + 200;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 3 && $servico <= 6) {
        $bonus = $reajuste + 300;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 6 && $servico <= 10) {
        $bonus = $reajuste + 500;
        echo "O salario com o bonus foi: {$bonus}";
    } else {

        echo "Não ganha bonus";
    }
} else {
    echo "Não tem reajuste";
    if ($servico >= 1 && $servico < 3) {
        $bonus = $reajuste + 100;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 1 && $servico <= 3) {
        $bonus = $reajuste + 200;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 3 && $servico <= 6) {
        $bonus = $reajuste + 300;
        echo "O salario com o bonus foi: {$bonus}";
    } else if ($servico > 6 && $servico <= 10) {
        $bonus = $reajuste + 500;
        echo "O salario com o bonus foi: {$bonus}";
    } else {

        echo "Não ganha bonus";
    }
}

?>