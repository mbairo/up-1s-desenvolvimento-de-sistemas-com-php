<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 05 - Marcos Bairo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php' ?>

<h4>Crie um programa utilizando uma estrutura de repetição que execute x vezes, onde 
a  quantidade  de  execuções  está  relacionada  ao  fato  de  serem  encontrados  12 
valores pares gerados aleatoriamente dentro do intervalo entre 1 e  6. <br>
Mostrar ao final a quantidade total de execuções.
</h4>

<h3>
	<?php 
	$pares=0;
	$qdt=0;

	while ($pares < 12) {
		if (rand(1, 6) % 2 ==0) {
			$pares++;
		}
		$qdt++;
	}
	echo "RESULTADO: <br><br>";
	echo "Quantidade total de execuções até que fosse encontrado 12 valores pares: $qdt";
	 ?>
</h3>	
</body>
</html>