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
     Informe a idade:<input type="text" name="idade"></br>
     Informe o tempo de contribuição:<input type="text" name="tempo"></br>
     <input type="submit" value="verificar">

    </form>
</body>
</html>

<?php
   $idade= $_GET['idade'];
   $tempo= $_GET['tempo']; 

    if( $idade >= 65 || $tempo >=30 ){
        echo "Você pode se aposentar";
    }else if ($idade >= 60 && $tempo >=25){
        echo "Você pode se aposentar";
    }else{ 
        echo "Você ainda não pode se aposentar";
    }

?>