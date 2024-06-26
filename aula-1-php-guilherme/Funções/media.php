<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <form action="">
    Nome<input type="text" name="digite o nome do aluno">
    nota1 <input type="text" name="nota1">
    nota2<input type="text" name="nota2">
    nota3<input type="text" name="nota3">
   
    <input type="submit" value="verificar">
    </form>
    
</body>
</html>

<?php
function soma($nota1, $nota2, $nota3){
    $media = $nota1 + $nota2 + $nota3/3;
    echo"\nsoma:{$media}";
    return $media;
}
function situaçao ($media){
    if($media >= 7  ){
        echo "media é: {$media}.situacao: aprovado";
    }else if($media >= 4 && $media <7){
        echo "media é: {$media}.situacao: recuperação";
    }else {
        echo "media é: {$media}.situacao: reprovado";
    
    }
}
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$media = soma($nota1, $nota2, $nota3);
situaçao($media);

?>