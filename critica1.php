<?php 

//Critique a afirmação “n2 -100n está em O(n2) para todo >=100

function notacao($n, $o){


	echo "O Primeiro valor foi ". $n;

	echo "<br>";
	echo "<br>";

	echo "O Segundo valor foi ". $o;

	echo "<br>";
	echo "<br>";


	$xn = ($n * $n) - 100 * $n;
	$xo = ($n * $n) * $o;
$xno = range(0, $xo);

	if (in_array($xn, $xno)) {
		
		echo  $xn . " Está contido em " . $xo;

	}else{

		echo  $xn . " Não está contido em " . $xo;
	}
}
echo "Todo n2 -100n está em O(n2) para todo >=100";
echo "<br>";
echo "<br>";

notacao(99, 20);
?>
