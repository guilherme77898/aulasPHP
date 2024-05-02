<?php
//receber os dados do formularioe e guarda na memoria
$nome = $_GET["nome"];
$numero1 =$_GET["numero1"];
$numero2 =$_GET["numero2"];

$soma = $numero1 + $numero2;

echo "Olá {$nome}";
echo "<br>O resultado da operacao é ".$soma;

?>