<?php 
$valores = array(10,30,80,100);
$soma = 0;
$media = 0;
foreach($valores as $v){
$soma += $v;


}
$media=$soma/4;
echo "A soma dos valores são: {$soma}\n";
echo "A media dos valores são: {$media}\n";


?>