
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Nome: <input type ="text" name="nome"></br>
        Peso: <input type ="text" name="peso"></br>
        Altura: <input type ="text" name="altura"></br>
       
       <input type="submit" value="verificar">
</form>

</body>
</html>
<?php
$nome = $_GET['nome'];
echo "{$nome}";
$peso = $_GET['peso'];
echo "{$peso}";
$altura = $_GET['altura'];
echo "{$altura}";
$imc = $peso / ($altura * $altura);

$imc = number_format($imc,2);
    if($imc < 16.9){
         echo "IMC {$imc} muito abaixo do peso";
    }else if($imc >=17 && $imc <=18.9){
        echo "IMC {$imc} abaixo do peso";
    }else if($imc >= 18.5 && $imc <=24.9){
        echo "IMC {$imc} peso normal";
    }else if($imc >= 25 && $imc <=29.9){
        echo "IMC {$imc} acima do peso ";
    }else if($imc >= 30 && $imc <=34.9){
        echo "IMC {$imc} Obesidade grau I";
    }else if($imc >= 35 && $imc <= 40){
        echo "IMC {$imc} Obesidade grau II ";
    }else {
        echo "IMC {$imc} Obesidade grau III ";
    }
    
?>