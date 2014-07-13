<?php 

ini_set('display_errors',1); 
error_reporting(E_ALL);


# Encontra um numero majoritario em um vetor.

$votos = array(10,22,30,22,22,30,40,22,22,22,22);

$totalvotos = count($votos);

$contagem = array_count_values($votos);

$formula = $totalvotos / 2 + 1;

$formula = floor($formula);

echo "Para vencer são necessários ". $formula . " votos + 1" ."<br><br>";
foreach ($contagem as $key => $repeticoes) {

	if ($repeticoes >= $formula) {
		
		$vencedor = array($key, $repeticoes);
	}else{

		if ($repeticoes > 1) {
			echo $key . " recebeu " . $repeticoes . " votos <br> <br>";
		}else{

			echo $key . " recebeu " . $repeticoes . " voto <br> <br>";
		}
	}
}
if (isset($vencedor)) {
		
	echo $vencedor[0] ." recebeu ". $vencedor[1] . " votos e venceu!";
}else{

	echo "Não houve um vencedor!";
}
 ?>