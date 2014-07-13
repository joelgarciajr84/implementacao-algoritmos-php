<?php 

ini_set('display_errors',1); 
error_reporting(E_ALL);


# Encontra um numero majoritario em um vetor.

$votos = array(10,22,30,22,22,30,40,22,22,22);

$totalvotos = count($votos);

$contagem = array_count_values($votos);

$formula = $totalvotos / 2 + 1;


foreach ($contagem as $key => $repeticoes) {

	if ($repeticoes >= $formula) {
		

		echo $key . " recebeu " . $repeticoes . " votos" . " e venceu as eleições";
	}
}



 ?>