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
     Informe a primeira nota:<input type="text" name="nota1"></br>
     Informe a segunda nota:<input type="text" name="nota2"></br>
     Informe a terceira nota:<input type="text" name="nota3"></br>
     <input type="submit" value="verificar">

    </form>
</body>
</html>

<?php
   $nota1= $_GET['nota1'];
   $nota2= $_GET['nota2'];
   $nota3= $_GET['nota3']; 

   $media= (($nota1 * 1) + ($nota2 *1) +($nota3 *2))/4;

   echo " a media do aluno foi: {$media} <br>";

    if( $media >= 7.0 ){
        echo "O aluno foi aprovado";
    }else{
        echo "O aluno foi reprovado";
    }

?>