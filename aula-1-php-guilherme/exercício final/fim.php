<?php 


$dados = [
    ['salario' => 800, 'filhos' => 1],
    ['salario' => 2000, 'filhos' => 7],
    ['salario' => 600, 'filhos' => 2],
    ['salario' => 100, 'filhos' => 5],
    ['salario' => 150, 'filhos' => 2],
    ['salario' => 280, 'filhos' => 3],
    ['salario' => 500, 'filhos' => 1],

];

//função

function estatistica($dados){
    $somaSalario = 0;
    $somaFilhos = 0;
    $totalPessoas = count($dados);
    $maiorSalario = 0;
    $salarioAte350 = 0;
    foreach($dados as $p){
        $salario = $p['salario'];
        $filhos = $p['filhos'];

        $somaSalario += $salario;
        $somaFilhos += $filhos;

        if($salario > $maiorSalario){
            $maiorSalario = $salario;
        }
        if($salario <= 350){
            $salariosAte350++;
        }
    }
    $mediaSalario = $somaSalario/$totalPessoas;
    $mediaFilhos = $somaFilhos/$totalPessoas;
    $porcentagemSalario350 = ($salariosAte350/$totalPessoas)*100;

    echo "Media do salario da populacao: ".number_format($mediaSalario,2)."\n";
    echo "Maior salario: R$ ".number_format($maiorSalario,2)."\n";
    echo "Media numero filhos: ".number_format ($mediaFilhos,2)."\n";
    echo "Porcentagem de pessoas com salario até R$350,00:".number_format($porcentagemSalario350)."%";

}
    //chamar a função
    estatistica($dados);
?>