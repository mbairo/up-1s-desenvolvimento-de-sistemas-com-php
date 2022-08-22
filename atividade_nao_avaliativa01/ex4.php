<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 04 - Marcos Bairo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once 'menu.php'; ?>

	<h4>Crie um algoritmo que execute um loop por 10 vezes. A cada execução deste loop, 
gere um valor aleatório entre 1 e 10. Após todas as execuções. Mostre a quantidade 
de valores pares gerados, e a quantidade de valores ímpares. 
	</h4>

	<h3>
		<?php 
		$par = 0;
		$impar = 0;
		for ($cont=1; $cont<=10; $cont++) { 
			
			/*$num = rand(1, 10);
			
			if ($num % 2 == 0) {
				$par ++;
			}*/

			if (rand(1, 10) % 2 == 0) {// utilizar o rand direto na condição para diminuir linhas de cod e variáveis
				$par ++;
			}
			else{
				$impar ++;
			}
		}
		echo "Quantidade de números pares gerados: $par <br>";
		echo "Quantidade de números impares gerados: $impar";
		 ?>
	</h3>
</body>
</html>