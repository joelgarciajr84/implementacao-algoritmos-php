<?php 

/* Selection Sort

O selection sort (do inglês, ordenação por seleção) é um algoritmo de ordenação
baseado em se passar sempre o menor valor do vetor para a primeira posição 
(ou o maior dependendo da ordem requerida), depois o de segundo menor valor
para a segunda posição, e assim é feito sucessivamente com os (n-1) elementos
restantes, até os últimos dois elementos.

*/

$dados = array(23,12,88,06,07,04,90);

echo "Vetor a ser organizado " . print_r($dados, true);

echo "<br>";
echo "<br>";


for ($i=0; $i <count($dados) ; $i++) { 

	$acertarpor = $i;


	for ($j=$i + 1; $j < count($dados) ; $j++) { 

		if ($dados[$j] < $dados[$acertarpor]) {

			$acertarpor = $j;

		}

	}
	if ($acertarpor != $i) {

		$ogarra = $dados[$i];

		$dados[$i] = $dados[$acertarpor];

		$dados[$acertarpor] = $ogarra;

	}
}

echo "Vetor organizado " . print_r($dados, true);

?>