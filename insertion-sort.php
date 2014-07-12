<?php 
/* Insertion Sort - Wikipedia

Insertion Sort ou ordenação por inserção é um simples algoritmo de ordenação,
eficiente quando aplicado a um pequeno número de elementos. Em termos gerais, 
ele percorre um vetor de elementos da esquerda para a direita e à medida que 
avabça vai deixando os elementos mais à esquerda ordenados. O Algoritmo de inserção
funciona da mesma maneira com que muitas pessoas ordenam cartas em um jogo
de baralho, como pôquer.
*/
$dados = array(23,12,06,07,04);

echo "Vetor a ser organizado " . print_r($dados, true);

echo "<br>";
echo "<br>";
$count = count($dados);

 
for($i = 1; $i < $count; $i ++){


    $j = $i-1;


    $chave = $dados[$i];

    while($j >= 0 && $dados[$j] > $chave){

        $dados[$j+1] = $dados[$j];


        $dados[$j] = $chave;

        $j = $j-1;       
    }
}
echo "Vetor organizado " . print_r($dados, true);


 ?>