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
        Digite o nome do aluno:<input type="text" name="nome"></br>
        Digite a idade do aluno:<input type="text" name="numero"></br>
        <input type="submit" value="verificar">
    </form>
</body>
</html>

<?php
    $nome = $_GET['nome'];
    $numero = $_GET['numero'];
    //echo "{$numero}";

    if($numero>=18){
        echo "O aluno {$nome} tem {$numero} anos, ele é maior de idade.";
    }else{
        echo "O aluno {$nome} tem {$numero} anos, ele é menor de idade.";
    }
?>