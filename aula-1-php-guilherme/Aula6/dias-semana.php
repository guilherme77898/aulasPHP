<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana</title>
</head>
<body>

    <form action="">
    <input type="text" name="numero">
    <input type="submit" value="enviar">
    
</form>

</body>
</html>
<?php
$numero = $_GET["numero"];
echo"{$numero}";
switch($numero){
    case 1:
        echo "domingo";
        break;
    case 2: 
        echo "segunda";
        break;
    case 3:
        echo "terça";
        break;
    case 4:
        echo "quarta";
        break;
    case 5:
        echo "quinta";
        break;
    case 6:
        echo "sexta";
        break;
    case 7:
        echo "sabado";
        break;
        default:
        echo"invalido";
}
?>
