<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Exercício 01 - Marcos Bairo</title>
</head>
<body>

	<?php include_once 'menu.php'; ?>
	<h1>Exercício 01</h1>

<h4>
Faça um algoritmo que percorra um intervalo de valores entre 1 e 100.  Calcule e 
mostre na tela: <br>
a. A quantidade de valores pares <br>
b. A soma dos valores pares <br>
c. A média dos valores ímpares <br>	
</h4>

	<h3>
	<?php 

		$qdt_par    =0;
		$soma_par   =0;
		$soma_impar =0;
		$qdt_impar  =0;

		for ($cont=1; $cont<=100; $cont++) { 
			if ($cont % 2 ==0) {
				$qdt_par++;
				$soma_par += $cont;
			}
			else{
				$qdt_impar++;
				$soma_impar += $cont;	
			}
		}

		echo " Quantidade de valores pares: $qdt_par<br>";
		echo "Soma dos valores pares: $soma_par<br>";
		echo "Média dos valores ímpares: ";
		echo $soma_impar / $qdt_impar;
		//echo "Média dos valores ímpares: $soma_impar / $qdt_impar "; Concatenar??? pq não deu certo?
	?>
	</h3>
</body>
</html>