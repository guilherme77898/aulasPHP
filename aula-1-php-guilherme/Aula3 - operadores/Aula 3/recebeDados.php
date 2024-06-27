<?php
//receber os dados do formulario e guarda na memoria
$nome = $_POST["nome"];
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$soma = $numero1 + $numero2;

echo "Olá {$nome}";
echo"<br>0 resultado da operacao é: ".$soma;



?>